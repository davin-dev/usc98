<?php
  class News extends DB
  {
    private $category;
    private $id;
    private $title;
    private $excerpt;
    private $content;

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
      $rows = $this->select("SELECT * FROM news WHERE `id` = $id");
      return $rows;
    }

    public function countplus($id){
       $this->select("UPDATE news SET `view_count` = `view_count` + 1 WHERE `id` = '$id' ");
    }

    public function get_cat(){
      return $this->select("SELECT * FROM news_cat");
    }
    
    public function add($headline,$content,$excerpt,$cat_id,$picture,$date)
    {
      
      return $this->select("INSERT INTO `news` (`headline` ,`content` ,`excerpt` ,`news_cat` ,`picture` ,`date`)
                    VALUES ('$headline', '$content','$excerpt','$cat_id', '$picture', '$date');");
    }

    public function delete()
    {
      $id = $_GET['id'];
      $this->select("DELETE FROM `news` WHERE `id` = $id");
      return $this->select("SELECT * FROM news");
    }

    public function get_category ($id = null)
    {
      if ( !$id ){
        return $this->select("SELECT * FROM news_cat");
      } else {
        return mysqli_fetch_assoc($this->select("SELECT * FROM `news_cat` WHERE (`id`=$id)"));
      }
    }
    
  }