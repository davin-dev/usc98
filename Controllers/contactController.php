<?php
  class contactController extends Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->loadModel("news");
      $category = $this->model->get_category();
      $data['category'] = $category;
      $this->view->render("front/_include/header_view",$data);
    }

    /**
    * render contact us page
    */
    public function index ()
    {
      $data['errors'] = 3;
      $this->view->render("front/contact_us/index_view",$data);
      $this->view->render("front/_include/footer_view");
      
    }

    /**
    * add message
    */
    public function addmessage ()
    {
      $fullname = $_POST['fullname'];
	  	$text = $_POST['text'];
      $email = $_POST['email'];

      $data = [];
      if(empty($_POST['fullname']) && empty($_POST['text'])){
        $data['errors'] = 1;
      }
      else  {
        $data['errors'] = 0;
        $addmessage = $this->model->c_add($fullname,$text,$email);
      }

      $this->view->render("front/contact_us/index_view",$data);
      $this->view->render("front/_include/footer_view");
    }

    

  }