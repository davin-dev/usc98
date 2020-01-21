<?php
  class aboutController extends Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->loadModel("news");
      $category = $this->model->get_category();
      $data['category'] = $category;
      $this->view->render("front/_include/header_view",$data);
    }

    public function index ()
    {
      $this->view->render("front/about_us/index_view");
      $this->view->render("front/_include/footer_view");
    }

  }