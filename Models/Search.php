<?php
  class Search extends DB
  {
    function __construct()
    {
      parent::__construct();
    }

    public function search ($query)
    {
        return $this->select("SELECT * FROM news WHERE `title` LIKE %$query%");
    }

 
  }
?>