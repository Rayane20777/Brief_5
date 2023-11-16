<?php


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$databaseName = "bankmanagement";
$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $databaseName";

if ($conn->query($sqlCreateDatabase)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
?>
