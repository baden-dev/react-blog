<?php
require 'connect_to_db.php';

$request_method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER['PATH_INFO'];

$valid_paths = array("/post", "/posts", "/add_post", "/edit_post", "/delete_post" );

if (!in_array($path, $valid_paths)) {
    echo json_encode(array("message" => "Path not valid"));
}
else{
    switch ($request_method) {
        case 'GET':
            if ($path == "/post" && !empty($_GET["post_id"])) {
                include('crud/read_one.php');
            } else if ($path == "/posts"){
                include('crud/read_all.php');
            }
            break;
        case 'POST':
            if($path == "/add_post"){
                include('crud/create.php');
            }
            break;
        case 'PUT':
            if($path == "/edit_post" && !empty($_GET["post_id"])){
                include('crud/update.php');
            }
            break;
        case 'DELETE':
            if($path == "/delete_post" && !empty($_GET["post_id"])){
                include('crud/delete.php');
            }
            break;
        default:
            http_response_code(405);
            echo json_encode(array("message" => "Method Not Allowed"));
            break;
    }
}
?>
