<?php
// Assuming you have a database called 'mydatabase' with a table called 'users'

// Establish a connection to the database
$servername = "localhost";
$username = "root"; // XAMPP MySQL username
$dbname = "mydatabase";


$conn = new mysqli($servername, $username, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the registration data from the AJAX request
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Perform the database insertion
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if ($conn->query($sql) == true) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
