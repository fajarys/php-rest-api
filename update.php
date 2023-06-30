<?php
require_once 'database.php';

header("Content-Type: aplication/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization");
$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];
$name = $data["name"];
$email = $data["email"];
$age = $data["age"];
$designation = $data["designation"];
$created = $data["created"];
// id='" . $id . "',
// $query = "UPDATE employee SET name= '" . $name . "', email= '" . $email . "' , age= '" . $age . "' , designation= '" . $designation . "' , created= '" . $created . "' WHERE id= '" . $id . "' ";
$query = "UPDATE `employee` SET `name`='$name',`email`='$email',`age`='$age',`designation`='$designation',`created`='$created' WHERE id='" . $id . "' ";

if (mysqli_query($conn, $query) or die("query failed")) {
    echo json_encode(array("message" => "Updated Succes", "status" => true));
} else {
    echo json_encode(array("message" => "Updated Failed", "status" => false));
}
