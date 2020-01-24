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
    }

    public function get_all()
    {
      return $this->db_exec("SELECT * FROM news order by `id` desc");
    }

    public function get_news($id)
    {
      $rows = $this->db_exec("SELECT * FROM news WHERE `id` = $id");
      return $rows;
    }

    public function fileupload ($file) 
    {
        $target_dir    = "public/img/";
        $target_file   = $target_dir . basename( $file["name"] );

        
            if ( move_uploaded_file( $file["tmp_name"], $target_file ) ) {
				echo "<font color='green'> The file " . basename( $file["name"] ) . " has been uploaded.</font>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
    }

    public function countplus($id){
       $this->db_exec("UPDATE news SET `view_count` = `view_count` + 1 WHERE `id` = '$id' ");
    }
    
    public function show_comments($id){
      return $this->db_exec("SELECT * FROM comments WHERE `news_id` = $id");
    }

    public function add_comment($id,$fullname,$text,$email){
      $this->db_exec("INSERT INTO `comments` (`fullname` ,`text` ,`email`,`news_id`)
                    VALUES ('$fullname', '$text','$email','$id');");
    }

    public function get_cat(){
      return $this->db_exec("SELECT * FROM news_cat");
    }
    
    public function add($headline,$content,$excerpt,$cat_id,$picture,$date)
    {
      
      return $this->db_exec("INSERT INTO `news` (`headline` ,`content` ,`excerpt` ,`news_cat` ,`picture` ,`date`)
                    VALUES ('$headline', '$content','$excerpt','$cat_id', '$picture', '$date');");
    }

    public function delete()
    {
      $id = $_GET['id'];
      $this->db_exec("DELETE FROM `news` WHERE `id` = $id");
      return $this->db_exec("SELECT * FROM news");
    }

    public function get_category ($id = null)
    {
      if ( !$id ){
        return $this->db_exec("SELECT * FROM news_cat");
      } else {
        return mysqli_fetch_assoc($this->db_exec("SELECT * FROM `news_cat` WHERE (`id`=$id)"));
      }
    }

    public function newsofcat($id){
      return $this->db_exec("SELECT * FROM news WHERE `news_cat`=$id");
    }

    public function search($query)
    {
        return $this->db_exec("SELECT * FROM news WHERE `headline` LIKE '%$query%'");
    }

    public function like($id){
      return $this->db_exec("SELECT likes FROM news WHERE `id` = $id");
    }

    public function likeadd($id){
      $this->db_exec("UPDATE `news` SET `likes`= `likes` + 1 WHERE `id` = $id ");
    }
    
  }