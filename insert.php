<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

$server = "sql3.freemysqlhosting.net";
$username = "sql3225083";
$pass = "5YB7rCXVpr";
$dbName = "sql3225083";
$data = json_decode(file_get_contents("php://input"));

$conn = new mysqli($server,$username,$pass,$dbName);
$sql = "INSERT INTO users (name, email, password,rating,review,code)
VALUES ('$data->name', '$data->email', '$data->password','','','$data->password')";
$result = $conn->query($sql);
$conn->close();
?>