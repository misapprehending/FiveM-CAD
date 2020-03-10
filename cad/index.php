<?php
    include_once('../includes/css.php');
    include_once('../includes/js.php');
    include_once('../config/config.php');
    include_once('../config/db.php');
    $ip = "::1";
    $ip2 = $_SERVER['REMOTE_ADDR'];
    if(!isset($_SESSION['username']))
    {
        header("Location: ../");
        return;
    }
    $id = $_SESSION['id'];
    $sql1 = "SELECT * from users WHERE id='$id'";
    $res1 = mysqli_query($db, $sql1) or die(mysqli_error());

    if(mysqli_num_rows($res1) > 0) {
        while($row = mysqli_fetch_assoc($res1)) {
            $charName = $row['charName'];
            $unitNo = $row['unitNo'];
        }
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
            <?php include_once('../includes/nav.php'); ?>
            <br><br><br>
            <center>
                <h3><?php echo $charName . ' - ' . $unitNo; ?></h3>
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
                                <th scope="row"><button type="button" class="close" ria-label="Close"><span aria-hidden="true">&times;</span></button></th>
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
                                <th scope="row"><button type="button" class="close" ria-label="Close"><span aria-hidden="true">&times;</span></button></th>
                                <td>Canna Kaupapa</td>
                                <td>Possession of Marked Bills, Attempted Murder of LEO x2, Possession of Illegal Goods, Possession of Methamphetemine.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                <div>
            </div>


            <!-- Modals -->

            <!-- New Bolo -->
            <div class="modal fade" id="createBolo" tabindex="-1" role="dialog" aria-labelledby="createBolo" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Create Bolo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-4">
                            <select class="browser-default custom-select mb-4">
                                <option value="" disabled selected>Choose option</option>
                                <option value="person">Person</option>
                                <option value="vehicle">Vehicle</option>
                            </select>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="createBolo-Description" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Person / Vehicle Description</label>
                        </div>

                        <div class="md-form mb-4">
                            <input type="text" id="createBolo-Reason" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Reason for Bolo</label>
                        </div>

                        <div class="md-form mb-4">
                            <input type="text" id="createBolo-LastLoc" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Last Seen</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Submit</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End New Bolo -->

            <!-- Modals End -->
        </div>
    </body>
</html>
