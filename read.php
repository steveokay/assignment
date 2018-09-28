<?php
header("Content-Type: application/json; charset=UTF-8");

include_once 'db.php';

//query to check if table contains items
$sql = "SELECT * FROM `assesment`";

$result = $db->query($sql);

if($result->num_rows > 0){

    $products = array();
    $products["body"] = array();
    $products["count"] = $count;

    while ($row = $result->fetch_assoc()){

        //extract($row);

        $p  = array(
              "id" => $id,
              "time_details" => $time_details,
              "request_ip" => $requeust_ip,
              "TAT" => $TAT
        );

        array_push($products["body"], $p);
    }

    echo json_encode($products);
}

else {

    echo json_encode(
        array("body" => array(), "count" => 0);
    );
}
?>
