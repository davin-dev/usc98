<?php
  class aboutController extends Controller
  {
    function __construct()
    {
		parent::__construct();
    }

    public function index ()
    {
      $this->view->render("front/_include/header_view");
      $this->view->render("front/about_us/index_view");
      $this->view->render("front/_include/footer_view");
    }

  }