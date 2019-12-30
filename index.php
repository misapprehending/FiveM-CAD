<?php
    include_once('includes/css.php');
    include_once('includes/js.php');
    include_once('config/config.php');
?>
<html>
    <head>
        <?php
            echo "<title>" . $server_name . " - CAD</title>";
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
                <p class="blue-text my-4 font-weight-bold">Police & EMS CAD</p>
                <hr class="my-4">
                <div class="pt-2">
                    <a href="login"><button type="button" class="btn btn-blue waves-effect">Log In <span class="fas fa-sign-in-alt ml-1"></span></button></a>
                    <a href="register"><button type="button" class="btn btn-outline-primary waves-effect">Register <i class="fas fa-user-plus ml-1"></i></button></a>
                    <?php echo "<a href='fivem://connect/$server_ip:$server_port'><button type='button' class='btn btn-outline-success waves-effect'>Join Server <i class='fas fa-user-plus ml-1></i></button></a>" ?>
                    <p align="right"></p>
                </div>
            </div>
        </div>
    </body>
</html>