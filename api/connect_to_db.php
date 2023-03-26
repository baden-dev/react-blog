<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "blog";

$connection = mysqli_connect($host, $user, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>