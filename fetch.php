<?php
// Fetch data from the database
$sql = 'SELECT * FROM users';
$result = $conn->query($sql);

// Prepare an array to hold the fetched data
$data = [];

// Fetch rows and add them to the data array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);

// Close the database connection
$conn->close();
