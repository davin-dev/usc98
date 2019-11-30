<?php
  class mainController extends Controller
  {
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render("front/_include/header_view");
        $this->view->render("front/index/main_view");
        $this->view->render("front/_include/footer_view");
    }
  }