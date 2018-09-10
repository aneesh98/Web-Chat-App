<!DOCTYPE HTML>
<html >
<head>
<style>
.error {color: #FF0000;}
</style>
<script >
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var pass=document.forms["myForm"]["password"].value;
    var confpass=document.forms["myForm"]["confpassword"].value;
    if(!(pass===confpass))
    {
      alert("Passwords dont match");
      return false;
    }
    console.log(x)
    var emailPattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (!emailPattern.test(x)) {
        alert("Fill in a Valid Email");
        
        return false;
    }
    var no=document.forms["myForm"]["mobileNo"].value;
    var t=/^\d{10}$/;
  if( !t.test(no))
  {alert("Please enter a valid number");
      return false;
    
  }
  else{
   
    if(no.length!=10)
     {alert("Please Enter a 10 Digit Mobile Number");
    
    document.forms["myForm"]["mobileNo"].value="";
    
    return false; }
  }

  return true;
}
</script>
</head>
<body>


  <!--<body>

  <h2>The autocomplete Attribute</h2>

  <form action="/action_page.php" autocomplete="on">
    First name:<input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    E-mail: <input type="email" name="email" autocomplete="off"><br>
    <input type="submit">
  </form>

  <p>Fill in and submit the form, then reload the page to see how autocomplete works.</p>
  <p>Notice that autocomplete is "on" for the form, but "off" for the e-mail field.</p>

  </body>-->

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
else if(!strpos($_POST["email"],"@")||!strpos($_POST["email"],".com"))
{
  $emailErr="Enter a valid email you bastard";
}
  else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<style>
body{
  margin-left: 30px;
  background-image:url("bgimg.jpg");
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;
}
.rect { 
    width: 30%;
    height: 200px;
    background-color: #ffffff;
    border-radius: 10%;
    padding:50px;
    margin:auto;    
}

.logo{
	float:left;
}
.top{
	position: relative;
	margin-left: 5px;
  
}
nav {
  padding:10px;
}
h1{
color:green;
}
</style>

<body>
 <!-- <h2>PHP Form Validation Example</h2>

  <div>
  
  </div>-->
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

  <h1>Welcome to AnyChat! <br> Register Yourself Now </h1>
<form class="rect" method="post" action="sample.php"  onsubmit="return validateForm()" name="myForm">
  <table>
    <tr>
  <td><label>First Name:</label> </td> 
  <td><input placeholder="Enter your First Name" type="text" name="name" required autofocus><td>
  
</tr>
<tr>
<td><label>Last Name:</label></td> 
<td><label><input placeholder="Enter your Last Name" type="text" name="Lname" required></label></td>
</tr> 
 
<tr>
<td><label>
  E-mail:</td></label>
  <td><input placeholder="Enter your Email" type="text" name="email"></td>


</tr>
<tr>
<td><label>
  Password:</label></td>
  <td> <input placeholder="Enter a Password" type="password" name="password"></td>
</tr>
<tr>
<td><label>  
  Confirm Password:</label></td>
  <td> <input placeholder="Re-enter Password" type="password" name="confpassword"></td>
 
</tr>
<tr>
  <td><label>
  Gender:
</label></td>
 <td> <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
</td>
</tr>
 <tr>
 <td>
 Enter Mobile Phone Number:<input id="mobNo" type="text" name="mobileNo" value="">
 </tr></td>
  <tr><td>
  <input type="submit" name="submit" value="Submit" ></tr></td>
</table>
</form>
<footer>
			<p>Leave a comment:</p>
			<textarea name="comment" rows="2" cols="50">
			</textarea>
			<p>Email : aneeshkulkarni@gmail.com</p>
</footer>
</body>
</html>
