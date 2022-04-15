<?php
 // echo "<pre>";
 // print_r($_POST);   
 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $email =  $_REQUEST['email'];
 $pass  =  $_REQUEST['pswd'];
 

$sql = "INSERT INTO new(email, pass)
VALUES ('$email', '$pass')";

return  $query->result();

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>