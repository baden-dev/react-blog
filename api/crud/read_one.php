<?php

$id = $_GET["post_id"];
$query = "SELECT * FROM posts WHERE post_id = :id";

try {
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $row_data = $stmt->fetch(PDO::FETCH_ASSOC);
    $json = json_encode($row_data);

    header('Content-Type: application/json');
    echo $json;

} catch(PDOException $e) {
    $response = array("message" => "Error retrieving table records: " . $e->getMessage());
    echo json_encode($response);
}
?>
