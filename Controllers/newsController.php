<?php
  class newsController extends Controller
  {
    function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
      $allNews = $this->model->get_all();
      $data = [];
      $i = 0;
      while ($row = $allNews->fetch_assoc()){
        $news[$i]['id'] = $row['id'];
        $news[$i]['headline'] = $row['headline'];
        $news[$i]['excerpt'] = $row['excerpt'];
        $news[$i]['picture'] = $row['picture'];
        
        $category = $this->model->get_category($row['news_cat']);
        $news[$i]['category'] = $category["title"];
        $i++;
      }
      $data['news'] = $news;
      $this->view->render("front/_include/header_view");
      $this->view->render("front/news/index_view", $data);
      $this->view->render("front/_include/footer_view");
    }

    public function continued($id = NULL,$errors = 3)
    {
      $i = 0;
      if($id == NULL) $id = $_GET['id'];
      
      $oneNews = $this->model->get_news($id);
      $data = [];
      $count = $this->model->countplus($id);
      $comments = $this->model->show_comments($id);


      while ($row = $comments->fetch_assoc()){
        $news[$i]['name'] = $row['fullname'];
        $news[$i]['text'] = $row['text'];
        $i++;
      }

      while ($row = $oneNews->fetch_assoc()){
        $news['id'] = $row['id'];
        $news['news_cat'] = $row['news_cat'];
        $news['headline'] = $row['headline'];
        $news['excerpt'] = $row['excerpt'];
        $news['picture'] = $row['picture'];
        $news['content'] = $row['content'];
        $news['view_count'] = $row['view_count'];
        $news['likes'] = $row['likes'];
        $data['errors'] = $errors;
        $category = $this->model->get_category($news['news_cat']);
        $news['category'] = $category["title"];
      }
      $data['news'] = $news;
      $this->view->render("front/_include/header_view");
      $this->view->render("front/news/onenews_view", $data);
      $this->view->render("front/_include/footer_view");

    }

    public function addcomment(){
      $id = $_GET['id'];
      $fullname = $_POST['fullname'];
	  	$text = $_POST['text'];
      $email = $_POST['email'];

      $data = [];
      if(empty($_POST['fullname']) && empty($_POST['text'])){
        $data['errors'] = 1;
      }
      else  {
        $data['errors'] = 0;
        $addmessage = $this->model->add_comment($id,$fullname,$text,$email);
      }
      $errors = $data['errors'];
      
      $this->continued($id,$errors);
    }

    public function search(){
      $query = $_POST['q'];
      $result = $this->model->search($query);

      while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $this->continued($id,$errors = 3);
      }
    }

    public function like(){
      $id = $_GET['id'];
      $this->model->likeadd($id);
      $this->continued($id);

    }

  }


  