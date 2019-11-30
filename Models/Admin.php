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
    }