<?php
$id = $_GET["post_id"];
$query = "DELETE FROM posts WHERE post_id=$id";

if (mysqli_query($connection, $query)) {
    $response = array("message" => "Record deleted successfully");
} else {
    $response = array("message" => "Error deleting record: " . mysqli_error($connection));
}
echo json_encode($response);
?>
