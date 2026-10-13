<?php
$conn = new mysqli('localhost', 'lojan', 'password', 'lojan');
$conn->set_charset('utf8mb4');

if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(['error' => 'Database connection failed']));
}