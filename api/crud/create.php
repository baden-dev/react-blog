<?php

$data = json_decode(file_get_contents("php://input"), true);
$title = $data["title"];
$content = $data["content"];
$date = $data["post_date"];
$time = $data["post_time"];

$query = "INSERT INTO posts (title, content, post_date, post_time) 
VALUES ('$title', '$content', '$date', '$time')";

if (mysqli_query($connection, $query)) {
    $response = array("message" => "Record created successfully");
} else {
    $response = array("message" => "Error creating record: " . mysqli_error($conn));
}

echo json_encode($response);
?>
