<?php
$servername = getenv("WORDPRESS_DB_HOST");
$username = getenv("WORDPRESS_DB_USER");
$password = getenv("WORDPRESS_DB_PASSWORD");
$db_name = getenv("WORDPRESS_DB_NAME");
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $db_name;";
if ($conn->query($sql) === TRUE) {
    echo "Database $db_name created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();