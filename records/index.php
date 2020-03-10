<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
    include_once('../config/db.php');

    if($public_records != true) {
        header('Location: http://' . $url . '');
    }
?>