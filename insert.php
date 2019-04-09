<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

$server = "sql9.freemysqlhosting.net";
$username = "sql9287264";
$pass = "GTG2S75ZwC";
$dbName = "sql9287264";
$data = json_decode(file_get_contents("php://input"));

$conn = new mysqli($server,$username,$pass,$dbName);
$sql = "INSERT INTO users (name, email, password,rating,review,code)
VALUES ('$data->name', '$data->email', '$data->password','','','$data->password')";
$result = $conn->query($sql);
$conn->close();
?>