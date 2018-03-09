<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
$server = "sql3.freemysqlhosting.net";
$username = "sql3225083";
$pass = "5YB7rCXVpr";
$dbName = "sql3225083";
$conn = new mysqli($server,$username,$pass,$dbName);
$data = json_decode(file_get_contents("php://input"));
$sql = "SELECT * FROM $data->searchValue WHERE upper(CITY) IN ('$data->city')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     $data = array() ;
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "0";
}
$conn->close();
?>
