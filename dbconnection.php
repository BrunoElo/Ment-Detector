<?php
// Database connection

$dbserver_name = "localhost";
$dbAdmin_name = "root";
$dbPassword = "";
$dbName = "mentdetector";

// Database connection
$dbconnect = mysqli_connect($dbserver_name, $dbAdmin_name, $dbPassword, $dbName);

// checks if there is a connection error to the database and handles it
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit(); // means the same as die();
} else {
    // Inserts user data(email) into the database
    $user_data = "INSERT INTO subscribers (email) VALUES ('$email');";

    // checks if the insertion to the database throws an error and then handles it
    if (mysqli_query($dbconnect, $user_data)) {
        echo "Email added successfully";
    } else {
        die('Error: ' . mysqli_error($dbconnect));
    }
    // closes the database connection
    mysqli_close($dbconnect);
}
