<?php
  class mainController extends Controller
  {
    function __construct()
    {
      parent::__construct();

      $this->loadModel("news");
      $category = $this->model->get_category();
      $data['category'] = $category;
      $this->view->render("front/_include/header_view",$data);

    }

    public function index()
    {
      $_SESSION['like'] = 1;
      $_SESSION['view'] = 1;

      $this->loadModel("news");
      $category = $this->model->get_category();

      $allNews = $this->model->get_all();
      $data = [];
      $i = 0;
      while ($row = $allNews->fetch_assoc()){
        $news[$i]['id'] = $row['id'];
        $news[$i]['headline'] = $row['headline'];
        $news[$i]['news_cat'] = $row['news_cat'];
        $news[$i]['picture'] = $row['picture'];
        $i++;
      }
      



      
      $data['news'] = $news;
      $data['category'] = $category;      
      $this->view->render("front/index/main_view",$data);
      $this->view->render("front/_include/footer_view");
    }
  }