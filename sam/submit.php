<?php
echo "<pre>";
 print_r($_POST);
 
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



		  $fullname =  $_REQUEST['fullname'];
		  $email =  $_REQUEST['email'];
          $subject =  $_REQUEST['subject'];
          $message = $_REQUEST['message'];
		   
		  
        

			$sql = "INSERT INTO reg(fullname,email,  subject, message)
VALUES ('$fullname', '$email', '$subject', '$message')";"<br>";




if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>
<script>
location.href = 'practice3.php';
</script>
