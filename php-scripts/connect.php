<?php
$host = '127.0.0.1';
$user = 'root';
$password = 'root';
$db = 'db';

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error) {
    die('Connect Error:' . $conn->connect_error);
}