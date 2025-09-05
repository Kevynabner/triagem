<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "triagem";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error){
    http_response_code(500);
    echo json_encode(["erro" => "Falha na conexão"], JSON_UNESCAPED_UNICODE);
    exit();
}



 








?>