<?php
$servername = "192.169.249.36";
$username = "sssdneers";
$password = "snl@F+*Z;nxL";
$dbname = "sssdneer_ultimate_alloy";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
