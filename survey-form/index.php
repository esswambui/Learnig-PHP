<?php 

include "connect.php";

//define variables
$fname= $lname= $uname= $pwd= $email= $dob= $gender= $phonenumber= $techArr= $preferredClass= $accomodation = "";

//function to make data safe to submit
function test_input($data) {
    //Strip unnecessary characters (extra space, tab, newline) f
    $data = trim($data);
    //Remove backslashes (\) 
    $data = stripslashes($data);
    //converts special characters to HTML entities.
    $data = htmlspecialchars($data);
    return $data;
}

//store form input to the variables
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = test_input($_POST["firstname"]);
    $lname = test_input($_POST["lastname"]);
    $uname = test_input($_POST["username"]);
    $pwd = test_input($_POST["password"]);
    $email = test_input($_POST["email"]);
    $dob = test_input($_POST["dob"]);
    $gender = test_input($_POST["gender"]);
    $phonenumber = test_input($_POST["phonenumber"]);
    $techArr = $_POST["languages"];
    $tech = implode(",", $techArr);
    $preferredClass = test_input($_POST["class-delivered"]);
    $accomodation = test_input($_POST["accomodation"]);
}

//insert to database
if (isset($_POST["submit"])) {

    
$sql = "INSERT INTO register (firstname, lastname, username, pwd, email, phonenumber, dob, gender,	preferred_tech,	class_delivered,accomodation)
VALUES ('$fname', '$lname', '$uname', '$pwd', '$email', '$phonenumber', '$dob', '$gender', '$tech', '$preferredClass', '$accomodation')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

include "index.html";
?>