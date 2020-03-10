<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
    include_once("../config/db.php");
    $usernameTaken = "";
    if(isset($_POST['register'])) {
        $username = strip_tags($_REQUEST['username']);
        $password = strip_tags($_REQUEST['password']);
        $charName = strip_tags($_REQUEST['charName']);
        $unitNo = strip_tags($_REQUEST['unitNo']);
        if($access_password != "") {
            $accessPw = strip_tags($_REQUEST['accessPw']);

            if($accessPw != $access_password) {
              header("Location: /");
            }
        }

        $username = stripslashes($username);
        $usernameRaw = stripslashes($username);
        $password = stripslashes($password);
        $charName = stripslashes($charName);
        $unitNo = stripslashes($unitNo);

        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $charName = mysqli_real_escape_string($db, $charName);
        $unitNo = mysqli_real_escape_string($db, $unitNo);

        $password = md5($password);

        if($username == "") {
          echo "Please choose a username";
          return;
        }

        if($password == "") {
          echo "Please choose a password";
          return;
        }

        $sql_getUsername = "SELECT * FROM users WHERE username='$usernameRaw' LIMIT 1";
        $resUsername = mysqli_query($db, $sql_getUsername);

        if(mysqli_num_rows($resUsername) > 0) {
            $usernameTaken = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                The username, <strong>$usernameRaw</strong> is already taken!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
        } else {
            $sql = "INSERT INTO users (username, password, charName, unitNo) VALUES ('$username', '$password', '$charName', '$unitNo')";
    
            mysqli_query($db, $sql);
    
            header("Location: ../login");
            $usernameTaken = "";
        }
    }
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
            <form class="text-center border border-light p-5" action="index.php" method="post">
                <?php echo $usernameTaken; ?>
                <p class="h4 mb-4">Register</p>
                <input type="username" name="username" class="form-control mb-4" placeholder="Username">
                <input type="password" name="password" class="form-control mb-4" placeholder="Password">
                <input type="text" name="charName" class="form-control mb-4" placeholder="Character Name">
                <input type="number" name="unitNo" class="form-control mb-4" placeholder="Unit Number">
                <?php
                    if ($access_password != ""){
                        echo "<input type=\"password\" name=\"accessPw\" class=\"form-control mb-4\" placeholder=\"Access Password\">";
                    }
                ?>
                <input class="btn btn-info btn-block my-4" type="submit" value="Register" name="register"></input>
                <p>A member already? <a href="../login">Log In</a>.</p>
            </form>
        </div>
    </body>
</html>