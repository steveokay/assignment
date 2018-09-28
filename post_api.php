<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'db.php';

$data = json_decode(file_get_contents("php://input"));

$time_details -> $data->time_details,
$request_ip -> $data->request_ip,
$TAT -> $data->TAT

//insert the data in the table
$sql = "INSERT INTO `assesment`(`time_details`,`request_ip`,`TAT`)
          VALUES('".$time_details."','".$request_ip."','".$TAT."' )";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo '{';
        echo '"message": "Logs were created."';
    echo '}';
}
else{
    echo '{';
        echo '"message": "Unable to create Logs."';
    echo '}';
}
?>
