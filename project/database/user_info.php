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
$tableName = "user_info";
$tableCheckSql = "SHOW TABLES LIKE '$tableName'";
$tableExists = $conn->query($tableCheckSql);

if ($tableExists->num_rows == 1) {
    echo "Table '$tableName' already exists<br>";
} else {
    // SQL query to create the table
    $tableSql = "CREATE TABLE $tableName (
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";
    
    if ($conn->query($tableSql) === TRUE) {
        echo "Table created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
// Check if data already exists
$dataCheckSql = "SELECT * FROM $tableName";
$dataExists = $conn->query($dataCheckSql);

if ($dataExists->num_rows > 0) {
    echo "Data already exists in the '$tableName' table<br>";
} else {
    // SQL query to insert data into the table
    $insertSql = "INSERT INTO $tableName (`username`, `password`) VALUES
    ('dushyant', '123@'),
    ('surendra', '123@'),
    ('rakesh', '123@'),
    ('khilendra', '123@')";
    
    if ($conn->query($insertSql) === TRUE) {
        echo "Data inserted successfully<br>";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}


$conn->close();
?>
