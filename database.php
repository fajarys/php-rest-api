<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rest-api";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
