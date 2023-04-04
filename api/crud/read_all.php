<?php

$query = "SELECT * FROM posts ORDER BY CONCAT(post_date, ' ', post_time) DESC";

try {
    $stmt = $connection->query($query);
    $table_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($table_data, JSON_PRETTY_PRINT);

    header('Content-Type: application/json');
    echo $json;

} catch(PDOException $e) {
    $response = array("message" => "Error retrieving table records: " . $e->getMessage());
    echo json_encode($response);
}

?>
