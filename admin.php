<!-- Developed by Sainath kishore.R.G at 18-06-2019 -->
<?php
session_start();
include "model/configure.php";
$login = $_SESSION['login_details'];
if (isset($_POST['update'])){
    header('Location: import_csv.php');
}
if (!$login){
    $login = "update login set login_detail = 0 where username ='". $_POST['username'] . "' and password = '" . $_POST['password'] . "' and usertype =1";
    $set = mysqli_query($conn, $login);
    session_destroy();
    header('Location: index.php');
}
?>
<html>
<head>
    <title>Ultimate Alloys</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Ends here -->

    <!-- Bootstrap -->
    <link href="asset/bootstrap/bootstrap_min_css.css" rel="stylesheet" id="bootstrap-css">
    <script src="asset/bootstrap/bootstrap_min_js.js"></script>
    <script src="asset/bootstrap/jquery_min_js.js"></script>
    <link rel="stylesheet" href="asset/bootstrap/stackpath_bootstrap.css" type="text/css">
    <!------ Bootstrap Ends ---------->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="asset/bootstrap/google_font_api.css" rel="stylesheet" type="text/css">
    <!-- Fonts Ends -->

    <!-- Design CSS -->
    <link rel="stylesheet" href="asset/css/admin.css" type="text/css">
    <!-- Design CSS Ends -->

    <!-- JavaScript and Jquery -->
    <script src="asset/js/admin.js" type="text/javascript"></script>
    <!-- JavaScript and Jquery Ends -->

</head>
<body>
<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="color: #5eb5e0; height: 80px; padding-top: 10px; padding-inline-start: 10px;">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-9">
                            <img src="asset/images/ULTIMATE_ALLOYS.jpg" width="275" height="60" alt="My Pic">
                        </div>
                        <div>
                            <label style="padding-top: 15px; padding-block-end: 10px;"><h5>WELCOME ADMIN!!!</h5></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="color: #5eb5e0">
                    <h2>Admin page</h2>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" name="file_upload" id="file_upload" action="import_csv.php">
                        <div class="form-group row justify-content-center">
                            <label class="col-md-3 col-form-label text-md-right"><strong>Choose file</strong></label>
                            <div class="col-md-6">
                                <input type="file" id="file" name="file" accept=".csv">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label class="col-md-1 col-form-label text-md-right"></label>
                            <div class="col-md-3">
                                <input type="submit" name="update" id="update" class="btn btn-success" onclick="al()" value="UPLOAD REPORT">
                            </div>
                            <div class="col-md-3">
                                <a href="logout.php" name="logout" id="logout" class="btn btn-danger">LOGOUT</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<!-- Completed by Sainath kishore.R.G at 18-06-2019 -->