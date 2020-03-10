<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
    include_once('../config/db.php');
    $ip = "::1";
    $ip2 = $_SERVER['REMOTE_ADDR'];
    if(isset($_SESSION['logged_in']))
    {
        header("Location: ../");
        return;
    }
    session_destroy();
    header("Location: ../");
?>