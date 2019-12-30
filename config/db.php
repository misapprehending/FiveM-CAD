<?php
    session_start();
    session_set_cookie_params(43200);
    include_once('config.php');
    $db = mysqli_connect($db_ip, $db_username, $db_password, $db_table)
?>