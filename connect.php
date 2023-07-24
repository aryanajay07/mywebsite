<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$database = 'mydatabase';
$port = '3306';

// Create a connection
$conn = new mysqli($host, $port, $username,  $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
