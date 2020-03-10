<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
    include_once('../config/db.php');
    $error = "";

    if(isset($_POST['login'])) {
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
    
        $username = stripslashes($username);
        $password = stripslashes($password);
    
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
    
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];
        $admin = $row['isAdmin'];
        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['admin'] = $admin;
            header("Location: ../cad");
          } else {
            $error = "  <div class='container'>
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            Incorrect username and/or password
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                    </div>";
        }
    }
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
            <form class="text-center border border-light p-5" action="index.php" method="post">
                <?php echo $error; ?>
                <p class="h4 mb-4">Sign in</p>
                <input type="username" name="username" class="form-control mb-4" placeholder="Username">
                <input type="password" name="password" class="form-control mb-4" placeholder="Password">
                <div class="d-flex justify-content-around">
                    <div>
                        <a href="">Forgot password?</a>
                    </div>
                </div>
                <input class="btn btn-info btn-block my-4" type="submit" value="Sign In" name="login"></input>
                <p>Not a member?
                    <a href="../register">Register</a>
                </p>
            </form>
        </div>
    </body>
</html>