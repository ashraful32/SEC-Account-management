<?php

session_start();
if(!($_SESSION['user_name'])){
	header("location: data_login.php");
}
else{
	$user_name = $_SESSION['user_name'];
	
}
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

div.con2{
	
	
	margin-left: 0px;
	max-width: 300px;
	float: left;
	
}



div.con3{
	
	border-left: 2px solid red;
	left: 300px;
	position: absolute;
	height: 300px;
}

div.con4{
	
	margin-left:100px;
	max-width: 280px;
	float: left;
	
}

div.con5{
	border-left: 2px solid red;
	left: 600px;
	position: absolute;
	height: 300px;
}

div.con6{
	
	margin-left:100px;
	max-width: 280px;
	float: left;
	
}

div.con7{
	
	margin-left:200px;
	max-width: 150px;
	float: left;
}

div.con7 a{
	color: red;
}


</style>

</head>

<body>

<div class = "con1">

	<h1> <center>Welcome SEC Account Management Office Staff Page </center></h1>
		
     </div>
	 
	
	   
		<div class="con2">
		 <h3> Student Payment Form Link</h3>
		 <h3> <a href="data_view.php"> Click here </a> </h3> 
		 
		</div>
		  
		  
		<div class = "con3">
		
		</div>
		
		<div class = "con4">
			
			<h3>From Upload Link</h3>
			<h3> <a href="notice_upload.php"> Click here </a> </h3>
			
			
		</div>
		
		 <div class = "con5">
		
		</div>
		
		<div class = "con6">
			
			<h3>Information View Link</h3>
			<h3> <a href="once.php"> Click here </a> </h3>
			
			
		</div>
		
		<div class = "con7">
		
		 <h3> <a href = "data_logout.php"> Log out </a> </h3>
		</div>
		

</body>
</html>

<?php 
/*
mysql_connect("localhost","root","");
mysql_select_db("store");

if(isset($_POST['submit'])){
	
	
	$student_name = $_POST['student_name'];
	$student_roll = $_POST['student_roll'];
	$student_department = $_POST['department'];
	$payment_des = $_POST['payment_des'];
	$taka = $_POST['taka'];
	
	if($student_name==''){
		echo "<script> alert('Please Enter student name.')</script>";
		exit();
	}
	
	if($student_roll==''){
		echo "<script> alert('Please Enter student roll number.')</script>";
		exit();
	}
	
	$check_user = "select * from management where student_name = '$student_name' and roll = '$student_roll'";
	
	 $run = mysql_query($check_user);
	 
	if(mysql_num_rows($run)> 0){
		
	    $_SESSION['student_name']= $student_name;
		
		$ins  =  "insert into payment values ('$student_name', '$student_roll', '$student_department' , '$payment_des', '$taka');";
		mysql_query($ins);
		echo "<script>window.open('data_view.php','_self')</script>";
	}
	else{
		echo "<script>alert('student_name or roll is incorrect.')</script>";
	}
	
	
	
}


*/
?>








