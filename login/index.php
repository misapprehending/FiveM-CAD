<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
?>
<html>
    <head>
        <?php
            echo "<title>" . $server_name . " - CAD Login</title>";
        ?>
    </head>
    <body>
    <br><br>
        <div class="container">
            <form class="text-center border border-light p-5" action="#!">
                <p class="h4 mb-4">Sign in</p>
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username">
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
                <div class="d-flex justify-content-around">
                    <div>
                        <a href="">Forgot password?</a>
                    </div>
                </div>
                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
                <p>Not a member?
                    <a href="register.php">Register</a>
                </p>
            </form>
        </div>
    </body>
</html>