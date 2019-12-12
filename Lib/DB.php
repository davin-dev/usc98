<?php
    class DB
    {
        function __construct()
        {
            $this->db = new mysqli(HOST, DB_USERNAME, DB_PASS, DB_NAME);
            mysqli_set_charset($this->db,"utf8");

            // check database connection
            if($this->db->connect_error){
                die("Connection failed!");
            }
        }

        public function select ($sql)
        {
            //die($sql);
            return $this->db->query($sql);  

        }
    }