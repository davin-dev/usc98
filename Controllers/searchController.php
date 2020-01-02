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
      echo $query;

      $result = $this->model->search($query);
      
      while($row = mysql_fetch_array($result)) {
        echo $row['id']; 
    }



    }

  }