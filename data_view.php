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

div.con1 a{
	color: red;
	margin-left: 1200px;
}

div.con4 a{
	color: red;
	margin-left: 100px;
}


div.con2{
	margin-left: 450px;
	max-width: 300px;
	float: left;
}

div.con3{
	margin-left: 601px;
	max-width: 300px;
	
}


</style>

</head>

<body>

<div class = "con1">

	<h1> <center>Welcome SEC Account Management Office Staff Page </center></h1>
		<h3> <a href = "data_logout.php">Log out </a> </h3>
		
		
		
     </div>
	 
	 <div class = "con4">
				<h3> <a href = "data_go.php">Office Home page </a> </h3>
		</div>
	 
	 
	 <form method = "post" action = "data_view.php">
	    <center>
		<h1> Student Payment Form</h1>
		</center>
		
		
		<div class="con2">
		 Student Name<br>
		 Student Roll Number <br>
		 Student Department <br>
		 Student Semester <br>
		 Payment Description <br>
		 Total Taka <br>
		 
		</div>
		  
		<div class = "con3">
		
		: <input type = "text" name = "student_name"> <br>
		: <input type = "text" name = "student_roll"> <br>
		: <input type = "text" name = "department"> <br>
		
		: <select size="1" name="semester">
	        <option value="" label="">- - - - -</option>
	         <option value="1st Semester" label="1st Semester">1st Semester</option>
	         <option value="2nd Semester" label="2nd Semester">2nd Semester</option>
	        <option value="3rd Semester" label="3rd Semester">3rd Semester</option>
			<option value="4th Semester" label="4th Semester">4th Semester</option>
			<option value="5th Semester" label="5th Semester">5th Semester</option>
			<option value="6th Semester" label="6th Semester">6th Semester</option>
			<option value="7th Semester" label="7th Semester">7th Semester</option>
			<option value="8th Semester" label="8th Semester">8th Semester</option>
	
	        </select> <br>
		: <input type = "text" name = "payment_des"> <br>
		: <input type = "text" name = "taka"> <br>
	     &nbsp  &nbsp <input type='submit' name = 'submit' value = 'submit'> <br> 
		 
		</div>
		
		</form>
		 

</body>
</html>

<?php 

$con = mysqli_connect("localhost","root","","sec");
/*mysql_select_db("store");*/

if(isset($_POST['submit'])){
	
	
	$student_name = $_POST['student_name'];
	$student_roll = $_POST['student_roll'];
	$student_department = $_POST['department'];
	$student_semester = $_POST['semester'];
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
	
	$check_user = "select * from management where student_name = '$student_name' and roll = '$student_roll' and department ='$student_department' ";
	
	 $run = mysqli_query($con,$check_user);
	 
	if(mysqli_num_rows($run)> 0){
		
	    $_SESSION['student_name']= $student_name;
		
		$ins  =  "insert into payment values ('$student_name', '$student_roll', '$student_department' ,'$student_semester', '$payment_des', '$taka');";
		mysqli_query($con,$ins);
		echo "<script>window.open('data_view.php','_self')</script>";
	}
	else{
		echo "<script>alert('student_name or roll is incorrect.')</script>";
	}
	
}



?>




