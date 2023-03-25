<?php
require 'connect_to_db.php';

$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id"])) {
            include('crud/read_one.php');
        } else {
            include('crud/read_all.php');
        }
        break;
    case 'POST':
        include('crud/create.php');
        break;
    case 'PUT':
        include('crud/update.php');
        break;
    case 'DELETE':
        include('crud/delete.php');
        break;
    default:
        http_response_code(405);
        echo json_encode(array("message" => "Method Not Allowed"));
        break;
}
?>
