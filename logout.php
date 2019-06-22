<?php
    $login = "update login set login_detail = 0 where username ='". $_POST['username'] . "' and password = '" . $_POST['password'] . "' and usertype =1";
    $set = mysqli_query($conn, $login);
    session_destroy();
    header('Location: index.php');
?>