<?php

$data = json_decode(file_get_contents("php://input"), true);
$title = $data["title"];
$content = $data["content"];
$post_date = $data["post_date"];
$post_time = $data["post_time"];

$id = $_GET["post_id"];
$query = "UPDATE posts SET title=?, content=?, post_date=?, post_time=? WHERE post_id=?";

try {
    $stmt = $connection->prepare($query);
    $stmt->bindParam(1, $title, PDO::PARAM_STR);
    $stmt->bindParam(2, $content, PDO::PARAM_STR);
    $stmt->bindParam(3, $post_date, PDO::PARAM_STR);
    $stmt->bindParam(4, $post_time, PDO::PARAM_STR);
    $stmt->bindParam(5, $id, PDO::PARAM_INT);
    $stmt->execute();

    $response = array("message" => "Record updated successfully");
} catch(PDOException $e) {
    $response = array("message" => "Error updating record: " . $e->getMessage());
}
echo json_encode($response);
?>
