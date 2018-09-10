<?php
//session_start();

/*if(isset($_SESSION["email"]))
{
  $password=$_SESSION["password"];
  $email=$_SESSION["email"];
  getData($email,$password);
}
else if(isset($_POST["email"])){
$password=$_POST["password"];
$email=$_POST["email"];
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
getData($email,$password);
}
else {

    header("Location: http://192.168.1.102:8012/loginform.php");

}*/
// Create connection
function getData($email,$password){
  $servername = "localhost";
  $username = "root";
  $passcode = "";
  $dbname = "new_test";
$conn = new mysqli($servername, $username, $passcode, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo $email." ".$password."<br>";
$passexec="SELECT Password FROM user_data WHERE Email='$email'";
$passquery=$conn->query($passexec);

$userquery="SELECT * FROM user_data WHERE Email='$email'";
$useres=$conn->query($userquery);
$passv=1;
$emailv=1;
if($passquery->num_rows!==0)
{
  $val=$passquery->fetch_assoc();
  if($val["Password"]!==$password)
  {echo "Password is incorrect";
$passv=0;
  }
}
else if($useres->num_rows===0)
{
  echo "Email is incorrect";
  $emailv=0;
}
if($passv===1 && $emailv===1){
  $sql = "SELECT Name FROM user_data WHERE Email='$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      $row=$result->fetch_assoc();
      echo "Welcome ".$row["Name"];
      echo "<br><button>Logout</button>";
  } else {
      echo "0 results";
  }

$conn->close();

}
}



?>
