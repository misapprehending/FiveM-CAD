<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
    include_once('../config/db.php');

    $sql = "SELECT * from users WHERE tableId='1'";
    $res = mysqli_query($db, $sql) or die(mysqli_error());

    $test = "";

    if(mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $username = $row['username'];

            $test .= "$username";
        }
        echo "$test";
    }
?>
