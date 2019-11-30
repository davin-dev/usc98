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
        $i++;
      }
      $data['news'] = $news;
      $this->view->render("front/_include/header_view");
      $this->view->render("front/news/index_view", $data);
      $this->view->render("front/_include/footer_view");
    }
    public function continue()
    {
      $id = $_GET['id'];
      $oneNews = $this->model->get_news($id);
      $data = [];
      $count = $this->model->countplus($id);
      while ($row = $oneNews->fetch_assoc()){
        $news['headline'] = $row['headline'];
        $news['excerpt'] = $row['excerpt'];
        $news['picture'] = $row['picture'];
        $news['content'] = $row['content'];
        $news['view_count'] = $row['view_count'];
        
      }
      $data['news'] = $news;
      $this->view->render("front/_include/header_view");
      $this->view->render("front/news/onenews_view", $data);
      $this->view->render("front/_include/footer_view");

    }

  }


  