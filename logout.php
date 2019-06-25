<?php
session_start();
include "model/configure.php";
$login = "update login set login_detail = 0 where usertype =1";
$set = mysqli_query($conn, $login);
$login = "update login set login_detail = 0 where and usertype =2";
$set = mysqli_query($conn, $login);
session_destroy();
header('Location: index.php');
?>