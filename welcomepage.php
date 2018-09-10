<?php
/*session_start();
if(isset($_SESSION["email"]))
{
  header("Location: http://192.168.1.102:8012/snakegame/login.php");
}
session_destroy();*/
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
<style>
.btn{
height:50px;
margin-top:10px;
background:yellow;
border-radius:15px;
font-family:Quicksand;
font-weight:bold;
font-size:18px
}
h4{
  text-align:center;
  font-family:sans-serif;

}
body{
  margin-top:100;
  background:lightgray;
  align:center;
}
.rect { 
    width: 250px;
    height: 250px;
    background-color: #40a977;
    border-radius: 10%;
    padding:50px;
    margin:auto;
    width:20%;
    padding:10px;
    
    
}

h1,h2{
  margin-top:0;
  font-family:montserrat;
  text-align:center;
}
.quote{
  width: 100%;
  height: 100px;
  text-align:center;
  background-color: #0000FF;
  margin: auto;
  border-radius:0%;
  color:#ffffff;
  top:20px;
  font-size:25px;
}
.logo{
	float:left;
}
.top{
	position: relative;
	margin-left: 5px;
  
}


</style>
<html>
<body>
<header class="top">
      <img src="logo.png" alt="Att" height="75px" class="logo">
      <br><br><br>
			<nav>
			<a href="first.html">Home</a>
			<a href="/about">About Us</a>
			<a href="/contact">Contact Us</a>
			<a href="signup.html">Careers At AnyChat</a>
			</nav>
			<hr>
    </header>
    <h1>AnyChat</h1>
<h2>An Online Chat Application</h2>

<div  >
<article class="quote"> "COMMUNICATION IS THE KEY TO CAREER AND AND SUCCESS" <br> -PAUL J MEYER </article><br>
<h4 class="rect">Already a user?<br><a href="loginform.php"><button class="btn">LOGIN</button><br></a> <br>else <br><a href="game.php"><button class="btn">REGISTER</button><br></a></h4>

</div>

</body>
</html>
