<?php

$data = json_decode(file_get_contents("php://input"), true);
$title = $data["title"];
$content = $data["content"];
$date = $data["post_date"];
$time = $data["post_time"];

// Prepare the SQL statement with placeholders
$query = $connection->prepare("INSERT INTO posts (title, content, post_date, post_time) 
VALUES (?, ?, ?, ?)");

// Bind parameters to the placeholders
$query->bind_param("ssss", $title, $content, $date, $time);

// Execute the statement
if ($query->execute()) {
    $response = array("message" => "Record created successfully");
} else {
    $response = array("message" => "Error creating record: " . $conn->error);
}

$query->close();
echo json_encode($response);
?>
