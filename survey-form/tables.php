<?php 

include "connect.php";

$createTable = "CREATE TABLE IF NOT EXISTS category (
    Category_ID int(11) NOT NULL,   
    Category_Name varchar(255) NOT NULL)";

if ($conn->query($createTable) === TRUE) {
    echo "Category table created successfully<br>";
  } else {
    echo "Error creating table: " . $conn->error;
  }
   
  $sqlProduct = "CREATE TABLE IF NOT EXISTS product (
    Product_ID int(11) NOT NULL,   
    product_name varchar(255) NOT NULL,   
    `category_id` int(11) NOT NULL)";
   
   if ($conn->query($sqlProduct) === TRUE) {
    echo "Product table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
?>