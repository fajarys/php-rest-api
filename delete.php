<?php
require_once 'database.php';

header("Content-Type: aplication/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization");
$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];
$query = "DELETE FROM employee WHERE id=$id";
if (mysqli_query($conn, $query) or die("query failed")) {
    echo json_encode(array("message" => "Deleted Success", "status" => true));
} else {
    echo json_encode(array("message" => "Deleted Failed", "status" => false));
}
