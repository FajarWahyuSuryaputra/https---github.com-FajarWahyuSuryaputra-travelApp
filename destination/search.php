<?php
require_once '../config.php';

$query = $_POST['query'];

$sql = "SELECT * FROM destinations WHERE name LIKE '%$query%' ";
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