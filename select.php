<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
$server = "sql9.freemysqlhosting.net";
$username = "sql9287264";
$pass = "GTG2S75ZwC";
$dbName = "sql9287264";
$conn = new mysqli($server,$username,$pass,$dbName);
$sql = "SELECT * FROM users";
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
