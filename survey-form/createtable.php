<?php 
$dbname = "testStudents";
require "connect.php";



// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS register (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    username VARCHAR(50) NOT NULL,
    pwd VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phonenumber INT(15) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(6),
    preferred_tech VARCHAR(20),
    class_delivered VARCHAR(10),
    accomodation VARCHAR(200),
    date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Register created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>