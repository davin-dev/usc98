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

                return $this->db_exec($sql);
            } else {
                return NULL;
            }
        }

        public function cat_add($name){
            return $this->db_exec("INSERT INTO `news_cat` (`title`)
                    VALUES ('$name');");

        }

        public function cat_get(){
            return $this->db_exec("SELECT * FROM `news_cat` ");
        }

        public function cat_delete($id){
            $this->db_exec("DELETE FROM `news_cat` WHERE `id` = $id");
        }
    }