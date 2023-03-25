<?php

$query = "SELECT * FROM posts";

if ($make_query= mysqli_query($connection, $query)) {
    $table_data = mysqli_fetch_all($make_query, MYSQLI_ASSOC);
    $json = json_encode($table_data, JSON_PRETTY_PRINT);

    header('Content-Type: application/json');
    echo $json;

} else {
    $response = array("message" => "Error retrieving table records: " . mysqli_error($conn));
    echo json_encode($response);
}
?>
