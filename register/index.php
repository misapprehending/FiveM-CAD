<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
?>
<html>
    <head>
        <?php
            echo "<title>" . $server_name . " - CAD Register</title>";
        ?>
    </head>
    <body>
    <br><br>
        <div class="container">
            <form class="text-center border border-light p-5" action="#!">
                <p class="h4 mb-4">Register</p>
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username">
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Access Password">
                <button class="btn btn-info btn-block my-4" type="submit">Register</button>
                <p>A member already?
                    <a href="login.php">Log In</a>
                </p>
            </form>
        </div>
    </body>
</html>