<?php
    include_once('includes/css.php');
    include_once('includes/js.php');
    include_once('config/config.php');
    include_once('config/db.php');
    if($server_port == "") {
        $server_port = "30120";
    }
?>
<html>
    <head>
        <?php
            echo "<title>$server_name</title>";
        ?>
    </head>
    <body>
        <div class="container">
        <br>
        <br>
            <!-- Jumbotron -->
            <div class="jumbotron text-center">
                <?php
                    if($server_logo != "")
                    {
                        echo "<img src='" . $server_logo. "' style='height:" . $logo_scale . "%; width:" . $logo_scale . "%'>";
                    }
                ?>
                <?php
                    echo "<h2 class='card-title h2'>" . $server_name . "</h2> <small>Not affiliated with " . $server_game . "M</small>";
                ?>
                <p class="blue-text my-4 font-weight-bold">Police CAD</p>
                <hr class="my-4">
                <div class="pt-2">
                    <?php
                        echo "<a href='http://$url/login'><button type='button' class='btn btn-blue waves-effect'>Log In <span class='fas fa-sign-in-alt ml-1'></span></button></a>";
                        echo "<a href='http://$url/register'><button type='button' class='btn btn-outline-primary waves-effect'>Register <i class='fas fa-user-plus ml-1'></i></button></a>";
                        echo "<a href='" . $server_game . "m://connect/$server_ip:$server_port'><button type='button' class='btn btn-outline-success waves-effect'>Join Server <i class='fas fa-user-plus ml-1'></i></button></a>";
                        if($public_records == true) {
                            echo "<a href='http://$url/records'><button type='button' class='btn btn-success waves-effect'>Public Records <i class='far fa-clipboard'></i></i></button></a>";
                        }
                    ?>
                    <br /><br /><br />
                    <center><small><?php echo $server_name; ?> is not affiliated with or endorsed by Rockstar North, Take-Two Interactive or other rightsholders. Any trademarks used belong to their respective owners.</small></center>
                </div>
            </div>
        </div>
    </body>
</html>