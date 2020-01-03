<?php
  class Contact extends DB
  {
    function __construct()
    {
      parent::__construct();
    }

    public function c_getall()
    {
      return $this->db_exec("SELECT * FROM contact");
    }

    public function c_getone($id)
    {
      return $this->db_exec("SELECT * FROM contact WHERE `id` = $id");
    }

    public function c_add($fullname,$text,$email)
    {
      return $this->db_exec("INSERT INTO `contact` (`fullname` ,`text` ,`email`)VALUES ('$fullname', '$text', '$email');");
    }

    public function c_delete($id)
    {
      $this->db_exec("DELETE FROM `contact` WHERE `id` = $id");
    }

    public function c_update($id , $newtext)
    {
      $this->db_exec("UPDATE `contact` SET `text` = $newtext WHERE `id` = $id");
    }

    
  }