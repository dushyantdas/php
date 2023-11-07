<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$dbname = "parking_project";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the created database
$conn->select_db($dbname);

// Check if the table already exists
$tableName = "update_info";
$tableCheckSql = "SHOW TABLES LIKE '$tableName'";
$tableExists = $conn->query($tableCheckSql);

if ($tableExists->num_rows == 1) {
    echo "Table '$tableName' already exists<br>";
} else {
    // SQL query to create the table
    $tableSql = "CREATE TABLE $tableName (
        Owner_name VARCHAR(30) NOT NULL,
        Vehicle_name VARCHAR(30) NOT NULL,
        Vehicle_number VARCHAR(30) NOT NULL,
        Entry_date VARCHAR(30) NOT NULL,
        Exit_date DATETIME NOT NULL,
        Token_number INT(11) NOT NULL
    )";
    
    if ($conn->query($tableSql) === TRUE) {
        echo "Table created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

$conn->close();
?>
