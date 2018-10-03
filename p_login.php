<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title> SEC Account Management</title>
<link rel="shortcut icon" href="img/govt_logoicon.gif"/>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header{
	background-color: DarkViolet ;
	height: 70px;
	width: 100%;
	margin-top:0px;
	padding-top:0px;
	font-size: 30px;
	text-align: center;
}

header img{
	margin-bottom: 0px;

}

section.sec2{
background-color: Aqua;
}

section.sec2 ul{
list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;

}

section.sec2 li{
	float: left;
}

section.sec2 li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

section.sec2 li a:hover{
	background-color: blue;
}

 li.dropdown {
    display: inline-block;
}


a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
  
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown:hover .dropdown-content {
    display: block;
	
}

aside{
	text-align:center;
	background-color: black;
}

nav{
max-width:170px;
float: left;
margin: 0;

}
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 169px;
    background-color: Aqua;
    border: 1px solid #555;
}

nav li a {
    display: block;
    color: #000;
    padding: 6px 10px;
    text-decoration: none;
}

nav li {
    text-align: center;
    border-bottom: 1px solid #555;
}


nav li a:hover:not(.active) {
    background-color: green;
    color: white;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
		
}

article div.abc{
max-width: 170px;
float: left;
line-height: 2;

}

article div.abc1{
margin-left: 180px;
line-height: 2;

}

footer{
    padding: 1em;
    color: Aqua;
    background-color: black;
    clear: left;
    text-align: center;
}

</style>
</head>
<body>

<div class="container">
 <header>
 <img src = "img/govt_logo1.gif">
    SYLHET ENGINEERING COLLEGE ACCOUNT MANAGEMENT
  
</header>

<section class = "sec2"> 
 <ul>
    <li><a href="pro.php">Home</a></li>
	
	<li class = "dropdown">
	<a href="#" class = "dropbtn">User</a>
	<div class = "dropdown-content">
	<a href = "reg2.php"> Registration</a>
	<a href = "p_login.php"> Log in</a>
	<a href = "#"> Close Account</a>
	</div>
	</li>
	
	
    <li class = "dropdown">
	<a href="#" class = "dropbtn">Admin</a>
	<div class = "dropdown-content">
	<a href = "#"> Principal</a>
	<a href = "dept_head_login.php"> Dept. Head </a>
	<a href = "#"> Register </a>
	<a href = "data_login.php"> Data </a>
	</div>
	</li>
	
    <li><a href="#">Notice</a></li>
	<li><a href="#">Contact</a></li>
	
	<li class = "dropdown">
	<a href="#"  class = "dropbtn">Others</a>
	<div class = "dropdown-content">
	<a href="http://www.sec.ac.bd/">SEC Website</a>
	</div>
	</li>
	
  </ul>
</section>


<aside>
 <img src = "img/SmartBuilding.jpg" height = "500px">
</aside>
 

<nav>
  <ul>
    <li><a href="pro.php">Home</a></li>
    <li><a href="reg2.php">New Registration</a></li>
    <li><a href="p_login.php">Log in</a></li>
    <li><a href="#">Notice</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="http://www.sec.ac.bd/">Sec website</a></li>
  </ul>
</nav>

<article>
		<form method = "post" action = "p_login.php">
		<h1> Login Form</h1>
		
		<div class="abc">
		 Student Roll Number <br>
		 Password <br>
		</div>
		  
		<div class = "abc1">
		: <input type = "text" name = "roll"> <br>
		: <input type = "password" name = "pass"><br>
	     <input type='submit' name = 'submit' value = 'Login'> <br> 
		</div>
		</form>
		
</article>

<footer>Made by: Ashraful,Al-mamun and Rakib</footer>

</div>

</body>
</html>

<?php

$con = mysqli_connect("localhost","root","","sec");
/*mysqli_select_db("store");*/

if(isset($_POST['submit'])){
	
	
	$user_roll = $_POST['roll'];
	$user_pass = $_POST['pass'];
	
	if($user_roll==''){
		echo "<script> alert('Please Enter your Roll Number.')</script>";
		exit();
	}
	
	if($user_pass==''){
		echo "<script> alert('Please Enter your password.')</script>";
		exit();
	}
	
	$check_user = "select * from management where roll = '$user_roll' and password = '$user_pass'";
	
	 $run = mysqli_query($con,$check_user);
	 
	if(mysqli_num_rows($run)> 0){
		
	    $_SESSION['roll']= $user_roll;
		
		echo "<script>window.open('user.php','_self')</script>";
	}
	else{
		echo "<script>alert('Roll or password is incorrect.')</script>";
	}
	
}

?>


