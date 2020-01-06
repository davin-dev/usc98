<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 'On');

  include("config.php");
  include("Function/main.php");
  include('Lib/Bootstrap.php');
  include('Lib/Controller.php');
  include('Lib/View.php');
  include('Lib/DB.php');

  $app = new Bootstrap();
  ?>

