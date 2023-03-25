<?php

$data = json_decode(file_get_contents("php://input"), true);
$title = $data["title"];
$content = $data["content"];
$post_date = $data["post_date"];
$post_time = $data["post_time"];

$id = $_GET["post_id"];
$query = "UPDATE posts SET title='$title', content='$content', post_date='$post_date', post_time='$post_time' WHERE post_id=$id";

if (mysqli_query($connection, $query)) {
    $response = array("message" => "Record updated successfully");
} else {
    $response = array("message" => "Error updating record: " . mysqli_error($connection));
}

echo json_encode($response);
?>
