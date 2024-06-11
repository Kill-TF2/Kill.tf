<?php

// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "clicks_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table for storing clicks
$sql = "CREATE TABLE IF NOT EXISTS button_clicks (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    click_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert click into the database
$sql = "INSERT INTO button_clicks (click_timestamp) VALUES (NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Click stored successfully";
} else {
    echo "Error storing click: " . $conn->error;
}

$conn->close();

?>
