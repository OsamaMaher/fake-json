<?php
header('Content-Type: application/json');

$response = [
    "user" => "test user",
    "sessionToken" => "this is a custom token"
];

echo json_encode($response);
