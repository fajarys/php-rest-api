<?php
require_once 'database.php';

header("Content-Type: aplication/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization");
$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];
$email = $data["email"];
$age = $data["age"];
$designation = $data["designation"];
$created = $data["created"];

$query = "INSERT INTO Employee(name,email,age,designation,created) VALUES ('$name','$email','$age','$designation','$created')";
if (mysqli_query($conn, $query) or die("Insert failed")) {
    echo json_encode(array("message" => "Insert Succes", "status" => true));
} else {
    echo json_encode(array("message" => "Insert Failed!", "Status" => false));
}
