<?php
    function redirect($dir = "/")
    {
        header("location: $dir");
    }

    /**
     * clear session
     * @param $session_name string
     */
    function delete_session($session_name)
    {
        $_SESSION[$session_name] = "";
        unset($_SESSION[$session_name]);
    }