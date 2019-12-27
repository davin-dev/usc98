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

    public function continued()
    {
      $id = $_GET['id'];
      $oneNews = $this->model->get_news($id);
      $data = [];
      $count = $this->model->countplus($id);
      while ($row = $oneNews->fetch_assoc()){
        $news['news_cat'] = $row['news_cat'];
        $news['headline'] = $row['headline'];
        $news['excerpt'] = $row['excerpt'];
        $news['picture'] = $row['picture'];
        $news['content'] = $row['content'];
        $news['view_count'] = $row['view_count'];
        $category = $this->model->get_category($news['news_cat']);
        $news['category'] = $category["title"];
      }
      $data['news'] = $news;
      $this->view->render("front/_include/header_view");
      $this->view->render("front/news/onenews_view", $data);
      $this->view->render("front/_include/footer_view");

    }

  }


  