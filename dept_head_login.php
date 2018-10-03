<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title> SEC Account Management</title>
<link rel="shortcut icon" href="img/govt_logoicon.gif"/>
<style>

div.con1{
	background-color: blue;
	margin-top: -20px;
	width:100%;
	border: 1px solid red;
}
div.mn{
	margin-left:0px;
	max-width: 500px;
	
   float: left;
}
div.abc{
margin-left: 501px;
max-width: 100px;
line-height: 2;

float: left;

}

div.abc1{
max-width: 300px;
margin-left: 602px;
line-height: 2;

}


</style>

</head>

<body>

<div class = "con1">

	<h1> <center>SEC Account Management Department Head Page </center></h1>
		
     </div>



    <form method = "post" action = "dept_head_login.php">
	    <center>
		<h1> Login Form</h1>
		</center>
		
		<div class = "mn">
		</div>
		<div class="abc">
		 User Name<br>
		 Password <br>
		 
		</div>
		  
		<div class = "abc1">
		
		: <input type = "text" name = "user_name"> <br>
		: <input type = "password" name = "pass"><br>
	     &nbsp  &nbsp <input type='submit' name = 'submit' value = 'Login'> <br> 
		 
		</div>
		
		
		</form>

</body>
</html>

<?php

mysql_connect("localhost","root","");
mysql_select_db("store");

if(isset($_POST['submit'])){
	
	
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['pass'];
	
	if($user_name==''){
		echo "<script> alert('Please Enter your user name.')</script>";
		exit();
	}
	
	if($user_pass==''){
		echo "<script> alert('Please Enter your password.')</script>";
		exit();
	}
	
	$check_user = "select * from admin where Dept_user = '$user_name' and Dept_pass = '$user_pass'";
	
	 $run = mysql_query($check_user);
	 
	if(mysql_num_rows($run)> 0){
		
	    $_SESSION['user_name']= $user_name;
		
		echo "<script>window.open('dept_show.php','_self')</script>";
	}
	else{
		echo "<script>alert('user_name or password is incorrect.')</script>";
	}
	
}

?>







