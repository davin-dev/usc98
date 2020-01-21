<?php
  class adminController extends Controller
  {
    function __construct()
    {
		parent::__construct();
    }

	/**
	* session check
	*/
    private function is_admin()
    {
        if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
        {
            return true;
        } else {
            return false;
        }
    }

	/**
	* login form render
	*/
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

		$this->loadModel("news");
		$category = $this->model->get_category();
		$data['category'] = $category;
		$this->view->render("front/_include/header_view",$data);
		$this->view->render("admin/auth/login_form_view", $data);
		$this->view->render("front/_include/footer_view");

    }

	/**
	* dashboard render
	*/
    public function dashboard()
    {
        $this->view->render("admin/_include/header_view");
		$this->view->render("admin/_include/dashboard_view");
		$this->view->render("front/_include/footer_view");

    }

	/**
	* login function
	*/
    public function login(){
		$result = $this->model->login();
		if ($result != NULL){
			if ($result->num_rows) {
				$_SESSION['is_admin'] = true;
				$this->dashboard();
			}
		 }
		else {
				$_SESSION['errors'] = 'نام کاربری یا رمز عبور اشتباه است';
				$this->index();
			}
		
		
    }

	/**
	* check admin session
	*/
	public function check_admin ()
	{
		if(isset($_POST['admin_username'])){
			$user = $_POST['admin_username'];
			$pass = $_POST['admin_password'];

			// admin login validation
			if($user == 'admin' && $pass == "123456"){
				$_SESSION['admin'] = true;
				$this->dashboard();
			}
		} else {
			return $this->index();
		}
	}
	

	/**
	* category management
	*/
	public function cat_mang()
	{
		if($this->is_admin())
		{
			$allcat = $this->model->cat_get();
			$data['allcat'] = $allcat;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/cat_mang",$data);
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}



	/**
	* category add
	*/
	public function cat_add(){
		if($this->is_admin())
		{
			if(isset($_POST['submit']))	{
				$name = $_POST['category'];
				$addcat = $this->model->cat_add($name);
				$allcat = $this->model->cat_get();
				$data['allcat'] = $allcat;
				$this->view->render("admin/_include/header_view");
				$this->view->render("admin/cat_mang",$data);
				echo "<font color='green'> Category Added!</font>";
				$this->view->render("front/_include/footer_view");
		}
		}
		else
		{
			$this->index();
		}

	}

	/**
	* category delete
	*/
	public function cat_delete(){
		if($this->is_admin())
		{
			$id = $_GET['id'];
			$addcat = $this->model->cat_delete($id);
			$allcat = $this->model->cat_get();
			$data['allcat'] = $allcat;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/cat_mang",$data);
			$allcat = $this->model->cat_get();
			$data['allcat'] = $allcat;
			echo "<font color='red'> Category Deleted!</font>";
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}


	/**
	* show all news
	*/
	public function getNews ()
	{
		if($this->is_admin())
		{
			$this->loadModel("news");
			$allNews = $this->model->get_all();
			$data['allNews'] = $allNews;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/show_all_news_view", $data);
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}
	
	
	/**
	* show all messages
	*/
	public function show_messages ()
	{
		if($this->is_admin())
		{
			$this->loadModel("contact");
			$allmessages = $this->model->c_getall();
			$data['allmessages'] = $allmessages;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/all_messages", $data);
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}

	/**
	* show one message
	*/
	public function show1_message ()
	{
		if($this->is_admin())
		{
			$this->loadModel("contact");
			$id = $_GET['id'];
			$onemessage = $this->model->c_getone($id);
			$data['onemessage'] = $onemessage;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/show_message",$data);
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}

	/**
	* delete message
	*/
	public function delete_messages ()
	{
		if($this->is_admin())
		{
			$this->loadModel("contact");
			$id = $_GET['id'];
			$messages = $this->model->c_delete($id);
			$allmessages = $this->model->c_getall();
			$data['allmessages'] = $allmessages;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/all_messages", $data);
			echo "<font color='red'> Message Deleted!</font>";
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}

	/**
	* update one message
	*/
	public function update_messages ()
	{
		if($this->is_admin())
		{
			$this->loadModel("contact");
			$id = $_GET['id'];
			$onemessage = $this->model->c_getone($id);
			$data['onemessage'] = $onemessage;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/update_message",$data);
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}

	/**
	* show updated message
	*/
	public function updated_message ()
	{
		if($this->is_admin())
		{
			$this->loadModel("contact");
			$id = $_POST['id'];
			$text = $_POST['text'];
			$upmessage = $this->model->c_update($id,$text);
			$onemessage = $this->model->c_getone($id);
			$data['onemessage'] = $onemessage;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/show_message",$data);
			echo "<font color='blue'> Message edited!</font>";
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}
	

	/**
	* add news
	*/
	public function addNews ()
	{
		if($this->is_admin())
		{
			$this->loadModel("news");
			$name_cat = $this->model->get_cat();
			$data['name_cat'] = $name_cat;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/addnews",$data);
	
			if(isset($_POST['btn'])){
				$this->upload();
				$headline = $_POST['headline'];
				$content = $_POST['content'];
				$excerpt = $_POST['excerpt'];
				$cat_id = $_POST['news_cat'];
				$picture = $_FILES['fileToUpload']['name'];
				 $date = $_POST['date'];
				$addnews = $this->model->add($headline,$content,$excerpt,$cat_id,$picture,$date);
				echo "<font color='green'> News added!</font>";
			}
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}

	/**
	* delete news
	*/
	public function delete_news ()
	{
		if($this->is_admin())
		{
			$this->loadModel("news");
			$delnews = $this->model->delete();
			$allNews = $this->model->get_all();
			$data['allNews'] = $allNews;
			$this->view->render("admin/_include/header_view");
			$this->view->render("admin/show_all_news_view", $data);
			echo "<font color='red'> News Deleted!</font>";
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}

	/**
	* get one news
	*/
	public function getone ()
	{
		if($this->is_admin())
		{
			$this->loadModel("news");
			$id = $_GET['id'];
			$onenews = $this->model->get_news($id);
			$data['onenews'] = $onenews;
			$this->view->render("admin/_include/header_view");		
			$this->view->render("admin/show_news",$data);
			$this->view->render("front/_include/footer_view");
		}
		else
		{
			$this->index();
		}
		
	}

	/**
	* Upload file
	*/
	public function upload ()
	{ 
		if($this->is_admin())
		{
			$this->loadModel("news");
			$file = $_FILES["fileToUpload"];
			$uploaded = $this->model->fileupload($file);
		}
		else
		{
			$this->index();
		}
		
		
	}

	/**
	* log out admin
	*/
	public function logout () {
		delete_session('is_admin');
		redirect(BASE_URL . "admin");
	}
		
  }