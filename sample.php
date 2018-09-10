<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_test";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
switch($_POST["gender"])
{
  case 'male':
  $gender=0;
  break;
  case 'female':
  $gender=1;
  break;
  case 'other':
  $gender=2;
  break;
}
// Create connection

$sql = "INSERT INTO user_data (Name, Email, Password,Gender)
VALUES ('$name','$email','$password', '$gender');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
