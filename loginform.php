<?php 
//Ssession_start();
function hello(){
  echo "HELLO";
}
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">

<style>
.rounding{
  margin-top:10px;
  border-radius:5px;
}
.textdiff{
  font-family:Quicksand;
}
.btn{
height:30px;
margin-top:10px;
background:yellow;
border-radius:15px;
font-family:Quicksand;
font-weight:bold;
font-size:18px
}
body{
  background-color:lightgray;
}
form{
  align:center;
}
</style>
<html>
<body>

<form method="post" action="login.php">
Email: <input type="text" name="email" class="rounding" required><br>
Password: <input type="password" name="password" class="rounding" required><br>

<input type="submit" name="submit" class="btn" >
</form>
</body>
</html>
