<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbjingers";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Failed to connect Mysql: " . mysqli_connect_error();
    exit();
}
