<?php
    session_start();
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
    include_once('../config/db.php');
    if(isset($_SESSION['logged_in']))
    {
        header("Location: ../");
        return;
    }
?>
<html>
    <head>
        <?php
            echo "<title>$server_name - CAD</title>";
        ?>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark primary-color-dark">
                <?php echo"<a class='navbar-brand' href='#'>$server_name Police Department</a>" ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Civilians</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">New Bolo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">New Warrant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <br><br><br>
            <center>
                <h3>Rory O'Connor - 109</h3>
                <?php $refresh = $_SERVER['PHP_SELF'];  echo "<a href='$refresh'><button type='button' class='btn btn-danger'>Refresh</button></a>";  ?>
            </center>
            <br><br><br>
            <div class="row">
                <div class="col-md-8">
                    <center><h2>Active Bolos</h2></center>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type</th>
                                <th scope="col">Information</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Person</td>
                                <td>Hawk Mask, Biker Jacket, (Says he's in a biker gang called the "animalz"), Known to roll around with ratman and 'cat mask man'</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <center><h2>Active Warrants</h2></center>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Reason</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Canna Kaupapa</td>
                                <td>Possession of Marked Bills, Attempted Murder of LEO x2, Possession of Illegal Goods, Possession of Methamphetemine.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                <div>
            </div>
        </div>
    </body>
</html>
