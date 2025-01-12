<?php

$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "wt_final";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
