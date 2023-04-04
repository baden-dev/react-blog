<?php

$id = $_GET["post_id"];
$query = $connection->prepare("DELETE FROM posts WHERE post_id=?");

$query->bindParam(1, $id);

if ($query->execute()) {
    $response = array("message" => "Record deleted successfully");
} else {
    $response = array("message" => "Error deleting record: " . $query->error);
}

$query->closeCursor();
echo json_encode($response);
?>
