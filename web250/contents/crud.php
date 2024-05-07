<?php
// Database connection parameters
$servername = "localhost";
$dbuser = "root";
$dbpassword = "";
$database = "pyrimid";

// Create connection
$conn = mysqli_connect($servername, $dbuser, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database
$conn->select_db($database);

//Create relaxation_techniques table
$sql_create_table = "CREATE TABLE IF NOT EXISTS practices (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    yoga_pose VARCHAR(50) NOT NULL,
    favorite_idea VARCHAR(50) NOT NULL,
    oil_fragrance VARCHAR(50) NOT NULL,
    difficulty ENUM('easy', 'medium', 'hard') NOT NULL,
    notes TEXT,
    date DATE
)";

// Create user_accounts table
$sql_create_account_table = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(128) NOT NULL,
    lastname VARCHAR(128) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

$errors = [];
$tables = [$sql_create_account_table, $sql_create_table];

foreach($tables as $k => $sql){
    $query = @$conn->query($sql);
    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
}

foreach($errors as $msg) {
    echo "$msg <br>";
 }


?>
