<?php
	class Bootstrap 
	{
		function __construct()
		{
			// include config file
		  if(!isset($_GET['page']) || $_GET['page'] == "index.php")
		  {
			$page= "main";
		  } else {
			$page = $_GET['page'];
		  }
		  
		  $arr = explode("/", $page);
		  
		  $ctrl = $arr[0] . "Controller";
		  include("Controllers/" . $ctrl . ".php");
		  $controller = new $ctrl();
		  $controller->loadModel($arr[0]);
		  if(isset($arr[1])){
			  $method = $arr[1];
		  } else {
			  $method = "index";
		  }
		  
		  $controller->{$method}();

		  // include("Models/News.php");
		  // $news = new News();
			
		}
	}