<?php

$data = json_decode(file_get_contents("php://input"), true);
$title = $data["title"];
$content = $data["content"];
$date = $data["post_date"];
$time = $data["post_time"];

$query = "INSERT INTO posts (title, content, post_date, post_time) VALUES (?, ?, ?, ?)";
try {

    $stmt = $connection->prepare($query);
    $stmt->bindParam(1, $title, PDO::PARAM_STR);
    $stmt->bindParam(2, $content, PDO::PARAM_STR);
    $stmt->bindParam(3, $date, PDO::PARAM_STR);
    $stmt->bindParam(4, $time, PDO::PARAM_STR);
    $stmt->execute();

    $response = array("message" => "Record created successfully");
    echo json_encode($response);
} catch(PDOException $e) {
    $response = array("message" => "Error creating record: " . $e->getMessage());
    echo json_encode($response);
}
?>
