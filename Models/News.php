<?php
  class News extends DB
  {
    function __construct()
    {
      parent::__construct();
//      echo "We are in News mode ...<br/>";
    }

    public function get_all()
    {
      return $this->select("SELECT * FROM news");
    }

    public function get_news($id)
    {
      return $this->select("SELECT * FROM news WHERE `id` = $id");
    }

    public function countplus($id){
       $this->select("UPDATE news SET `view_count` = `view_count` + 1 WHERE `id` = '$id' ");
    }

    public function add($headline,$content,$excerpt,$picture,$date)
    {
      
      return $this->select("INSERT INTO `news` (`headline` ,`content` ,`excerpt` ,`picture` ,`date`)
                    VALUES ('$headline', '$content','$excerpt', '$picture', '$date');");
    }

    public function delete()
    {
      $id = $_GET['id'];
      $this->select("DELETE FROM `news` WHERE `id` = $id");
      return $this->select("SELECT * FROM news");
    }

    
  }