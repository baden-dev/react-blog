<?php

$id = $_GET["post_id"];
$query = "SELECT * FROM posts WHERE post_id = $id";

if ($make_query= mysqli_query($connection, $query)) {
    $row_data = mysqli_fetch_assoc($make_query);
    $json = json_encode($row_data);

    header('Content-Type: application/json');
    echo $json;

} else {
    $response = array("message" => "Error retrieving table records: " . mysqli_error($connection));
    echo json_encode($response);
}
?>
