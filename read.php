<?php
header("Content-Type: aplication/json");
header("Access-Control-Allow-Origin: *");
require_once 'database.php';

$query = "SELECT * FROM Employee";

$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if ($count > false) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($rows);
} else {
    echo json_encode(array("message" => "Empty", "status" => false));
}
