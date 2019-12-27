<?php
  class adminController extends Controller
  {
    function __construct()
    {
		parent::__construct();
    }

    private function is_admin()
    {
        if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
        {
            return true;
        } else {
            return false;
        }
    }

    public function index()
    {
        if($this->is_admin())
        {
            redirect(BASE_URL . 'admin/dashboard');
        }
        $data = [];
        if(isset($_SESSION['errors']) && $_SESSION['errors']){
            $data['errors'] = $_SESSION['errors'];
            delete_session('errors');
        }

		$this->view->render("front/_include/header_view");
		$this->view->render("admin/auth/login_form_view", $data);
		$this->view->render("front/_include/footer_view");

    }

    public function dashboard()
    {
        $this->view->render("admin/_include/header_view");
		$this->view->render("admin/_include/dashboard_view");
		$this->view->render("front/_include/footer_view");

    }

    public function login(){
        $result = $this->model->login();
        if ($result->num_rows) {
            $_SESSION['is_admin'] = true;
            redirect(BASE_URL . 'admin/dashboard');
        } else {
            $_SESSION['errors'] = 'نام کاربری یا رمز عبور اشتباه است';
            redirect(BASE_URL . 'admin');
        }
    }

	public function check_admin ()
	{
		if(isset($_POST['admin_username'])){
			$user = $_POST['admin_username'];
			$pass = $_POST['admin_password'];

			// admin login validation
			if($user == 'admin' && $pass == "123456"){
				$_SESSION['admin'] = true;
				include("Views/admin/dashboard_view.php");
			}
		} else {
			return $this->index();
		}
	}
	
	public function upload ()
	{
		if($this->is_admin()) {
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/uploadform");
			

			if(isset($_POST['submit']))	{
				include("Models/Upload.php");
				$file_to_upload = new Upload();
				$file = $_FILES["fileToUpload"];
				$uploaded = $file_to_upload->fileupload($file);
				
			}
			$this->view->render("front/_include/footer_view");
		}
	
	}

	public function cat_mang(){
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/cat_mang");
		$this->view->render("front/_include/footer_view");

		


	}


	/**
	* show all news
	*/
	public function getNews ()
	{
		include("Models/News.php");
		$news = new News();
		$allNews = $news->get_all();
		$data['allNews'] = $allNews;
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/show_all_news_view", $data);
		$this->view->render("front/_include/footer_view");
	}
	
	

	public function show_messages ()
	{
		
		
		include("Models/Contact.php");
		$messages = new Contact();
		$allmessages = $messages->c_getall();
		$data['allmessages'] = $allmessages;
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/all_messages", $data);
		$this->view->render("front/_include/footer_view");

	}

	public function show1_message ()
	{
		include("Models/Contact.php");
		$messages = new Contact();
		$id = $_GET['id'];
		$onemessage = $messages->c_getone($id);
		$data['onemessage'] = $onemessage;
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/show_message",$data);
		$this->view->render("front/_include/footer_view");

	}

	public function delete_messages ()
	{
		
		include("Models/Contact.php");
		$messages = new Contact();
		$id = $_GET['id'];
		$messages->c_delete($id);
		$allmessages = $messages->c_getall();
		$data['allmessages'] = $allmessages;
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/all_messages", $data);
		echo "<font color='red'> Message Deleted!</font>";
		$this->view->render("front/_include/footer_view");

	}

	public function update_messages ()
	{
		include("Models/Contact.php");
		$messages = new Contact();
		$id = $_GET['id'];
		$onemessage = $messages->c_getone($id);
		$data['onemessage'] = $onemessage;
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/update_message",$data);
		$this->view->render("front/_include/footer_view");

	}

	public function updated_message ()
	{
		include("Models/Contact.php");
		$messages = new Contact();
		$id = $_POST['id'];
		$text = $_POST['text'];
		

		$upmessage = $messages->c_update($id,$text);
		$onemessage = $messages->c_getone($id);
		$data['onemessage'] = $onemessage;
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/show_message",$data);
		echo "<font color='blue'> Message edited!</font>";
		$this->view->render("front/_include/footer_view");

	}
	

	/**
	* add news
	*/
	public function addNews ()
	{
		include("Models/News.php");
		$news = new News();
		$name_cat = $news->get_cat();
		$data['name_cat'] = $name_cat;


		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/addnews",$data);

		
		
		if(isset($_POST['btn']))	{
			$headline = $_POST['headline'];
			$content = $_POST['content'];
			$excerpt = $_POST['excerpt'];
			$cat_id = $_POST['news_cat'];
			$picture = $_POST['picture'];
		 	$date = $_POST['date'];
			$addnews = $news->add($headline,$content,$excerpt,$cat_id,$picture,$date);
			echo "<font color='green'> News added!</font>";
		}
		$this->view->render("front/_include/footer_view");
	}

	/**
	* delete news
	*/
	public function delete_news ()
	{
		
		include("Models/News.php");
		$news = new News();
		$delnews = $news->delete();
		$allNews = $news->get_all();
		$data['allNews'] = $allNews;
		$this->view->render("admin/_include/header_view");
		$this->view->render("admin/show_all_news_view", $data);
		echo "<font color='red'> News Deleted!</font>";
		$this->view->render("front/_include/footer_view");
	}

	/**
	* get one news
	*/
	public function getone ()
	{
		include("Models/News.php");
		$news = new News();
		$id = $_GET['id'];
		$onenews = $news->get_news($id);
		$data['onenews'] = $onenews;
		$this->view->render("admin/_include/header_view");		
		$this->view->render("admin/show_news",$data);
		$this->view->render("front/_include/footer_view");
	}

	/**
	* log out admin
	*/
	public function logout () {
		delete_session('is_admin');
		redirect(BASE_URL . "admin");
	}
		
  }