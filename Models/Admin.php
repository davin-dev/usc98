<?php
    class Admin extends DB
    {
        function __construct()
        {
            parent::__construct();
        }

        public function login()
        {
            if(isset($_POST['admin_username'])) {
                $user = $_POST['admin_username'];
                $pass = $_POST['admin_password'];

                $sql = "SELECT * FROM `users` 
                        WHERE (`username` = '$user') AND (`password` = $pass) 
                        AND (`access_level` = '1')";

                return $this->select($sql);
            } else {
                return false;
            }
        }

        public function cat_add($name){
            return $this->select("INSERT INTO `news_cat` (`title`)
                    VALUES ('$name');");

        }

        public function cat_get(){
            return $this->select("SELECT * FROM `news_cat` ");
        }

        public function cat_delete($id){
            $this->select("DELETE FROM `news_cat` WHERE `id` = $id");
        }
    }