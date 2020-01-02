<?php
  class searchController extends Controller
  {
    function __construct()
    {
		parent::__construct();
    }

    public function index ()
    {
      $query = $_POST['q'];

      $result = $this->model->search($query);
      
      while ($row = $result->fetch_assoc()){
            $news['id'] = $row['id'];
        }
    
      

      echo $news['id'];

    }

  }