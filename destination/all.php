<?php
require_once '../config.php';

$sql = "SELECT * FROM destinations ORDER BY name LIMIT 5";
$result = $connection -> query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($get_rows = $result->fetch_assoc()) {
        $data[] = $get_rows;
    }
    header("HTTP/1.0 200");
    echo json_encode($data);
} else {
    header("HTTP/1.0 404");
    echo json_encode(array(
        "message" => "not found",
    ));
}