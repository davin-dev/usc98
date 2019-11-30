<?php
  class Contact extends DB
  {
    function __construct()
    {
      parent::__construct();
    }

    public function c_getall()
    {
      return $this->select("SELECT * FROM contact");
    }

    public function c_getone($id)
    {
      return $this->select("SELECT * FROM contact WHERE `id` = $id");
    }

    public function c_add($fullname,$text,$email)
    {
      return $this->select("INSERT INTO `contact` (`fullname` ,`text` ,`email`)VALUES ('$fullname', '$text', '$email');");
    }

    public function c_delete($id)
    {
      $this->select("DELETE FROM `contact` WHERE `id` = $id");
    }

    public function c_update($id , $newtext)
    {
      $this->select("UPDATE `contact` SET `text` = $newtext WHERE `id` = $id");
    }

    
  }