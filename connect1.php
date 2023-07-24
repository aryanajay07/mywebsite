<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '', 'aryanajay');

// get the post records
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO user_accounts(`Id`, `username`, `email`, `password`) VALUES ('0', '$username', '$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact Records Inserted";
}

?>