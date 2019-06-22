<!-- Developed by Sainath kishore.R.G at 18-06-2019 -->
<?php
session_start();
include "model/configure.php";
if (isset($_POST['submit'])){
    if ($_POST['username'] == null || $_POST['password'] == null){
        echo "<div class=\"row justify-content-center\">
                            <div class=\"col-md-7\">
                                <div class=\"card\">
                                    <div class=\"card-header\" style=\"color: #b21f2d\">
                                        Fill Username and Password, try again
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>";
    } else {
        $login_check = "SELECT * FROM login WHERE username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "' and usertype =1";
        $admin = mysqli_query($conn, $login_check);
        $login_check1 = "SELECT * FROM login WHERE username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "' and usertype =2";
        $display = mysqli_query($conn, $login_check1);
        if (mysqli_num_rows($admin) >= 1) {
            $login = "update login set login_detail = 1 where username ='". $_POST['username'] . "' and password = '" . $_POST['password'] . "' and usertype =1";
            $set = mysqli_query($conn, $login);
            $_SESSION['login_details'] = 1;
            header('Location: admin.php');
        } elseif (mysqli_num_rows($display) >= 1) {
            $login = "update login set login_detail = 1 where username ='". $_POST['username'] . "' and password = '" . $_POST['password'] . "' and usertype =1";
            $set = mysqli_query($conn, $login);
            $_SESSION['login_details'] = 1;
            header('Location: display.php');
        } else {
            echo "<div class=\"row justify-content-center\">
                                <div class=\"col-md-7\">
                                    <div class=\"card\">
                                        <div class=\"card-header\" style=\"color: #b21f2d\">
                                            Username and password or mismatched kindly check and try again
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>";
        }
    }
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
    <script src="asset/js/index.js" type="text/javascript"></script>
    <!-- JavaScript and Jquery Ends -->

</head>
<body>
<div class="cotainer">
    <div id="error" style="display: none">
        <div class='row justify-content-center'>
            <div class='col-md-7'>
                <div class='card'>
                    <div class='card-header' style='color: #b21f2d'>
                        Login Failed Please fill all the field and try again
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style="color: #5eb5e0">
                    <img src="asset/images/ULTIMATE_ALLOYS.jpg" width="300" height="63" alt="My Pic" >
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style="color: #5eb5e0"><h2>Login page</h2></div>
                <div class="card-body">
                    <form method="post" name="first" id="first" onsubmit="return validate();">
                        <!-- <div class="offset-md-1"> -->
                        <div class="form-group row justify-content-center">
                            <label class="col-md-2 col-form-label text-md-right">Username:</label>
                            <div class="col-md-6">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label class="col-md-2 col-form-label text-md-right">Password:</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <input type="submit" name="submit" id="submit" class="btn btn-success" onclick="return validate();" value="LOGIN">
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