<?php

$data = json_decode(file_get_contents("php://input"), true);
$title = $data["title"];
$content = $data["content"];
$post_date = $data["post_date"];
$post_time = $data["post_time"];

$id = $_GET["post_id"];
$query = $connection->prepare("UPDATE posts 
SET title=?, content=?, post_date=?, post_time=? WHERE post_id=?");

$query->bind_param("ssssi", $title, $content, $post_date, $post_time, $id);

if ($query->execute()) {
    $response = array("message" => "Record updated successfully");
} else {
    $response = array("message" => "Error updating record: " . $query->error);
}

$query->close();
echo json_encode($response);
?>
