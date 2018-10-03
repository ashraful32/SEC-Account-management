
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

div.con2 a{
	
	color: red;
	margin-left: 1200px;
}


</style>

</head>

<body>

<div class = "con1">

	<h1> <center>Welcome SEC Account Management Office Staff Page </center></h1>
		
     </div>
	 

	 <div class = "con2">
	   
	   <h3><a href = "data_logout.php"> Log out </a> </h3>
		<center> <h1> User Information </h1> </center>
		
	 </div>
	 
	 <form method = "post" action = "once.php">
		<h1> Search Form</h1>
		
		<div class="abc">
		 Student Roll Number  : <input type = "text" name = "roll"> 
		  Department
	<select size="1" name="department">
	<option value="" label="">- - - - -</option>
	<option value="CSE" label="CSE">CSE</option>
	<option value="CIVIL" label="CIVIL">CIVIL</option>
	<option value="EEE" label="EEE">EEE</option>
	</select> 
		 
		 Semester
	<select size="1" name="semester">
	<option value="" label="">- - - - -</option>
	<option value="1st Semester" label="1st Semester">1st Semester</option>
	<option value="2nd Semester" label="2nd Semester">2nd Semester</option>
	<option value="3rd Semester" label="3rd Semester">3rd Semester</option>
	<option value="4th Semester" label="4th Semester">4th Semester</option>
	<option value="5th Semester" label="5th Semester">5th Semester</option>
	<option value="6th Semester" label="6th Semester">6th Semester</option>
	<option value="7th Semester" label="7th Semester">7th Semester</option>
	<option value="8th Semester" label="8th Semester">8th Semester</option>
	
	</select> <br><br>
		 <center> <input type='submit' name = 'submit' value = 'search'> </center><br> 
		</div>
		  
		</form> 
		
		

</body>
</html>


<?php

$con = mysqli_connect("localhost","root","","sec");
/*mysql_select_db("store");*/

if(isset($_POST['submit'])){
	
	
	$student_roll = $_POST['roll'];
	$student_dept = $_POST['department'];
	$semester = $_POST['semester'];
	
	if($student_roll=='' and $student_dept=='' and $semester==''){
		echo "<script> alert('Please Enter Student Roll Number or department or semester.')</script>";
		exit();
	}
	
	else if($student_roll!='' and $student_dept=='' and $semester==''){
		
		$check_user = "select * from payment where roll = '$student_roll' ";
	
	 $run = mysqli_query($con,$check_user);
	 
	if(mysqli_num_rows($run)> 0){
		
		  $_SESSION['roll']= $student_roll;
		
	  //echo "well";
	  
	  echo "<script>window.open('sea1.php','_self')</script>";
	}
	else{
		echo "<script>alert('This student not given payment fee.')</script>";
	}
	
	}
	
	else if($student_roll=='' and $student_dept!='' and $semester==''){
		
			$check_user = "select * from payment where department = '$student_dept' ";
	
	 $run = mysqli_query($con,$check_user);
	 
	if(mysqli_num_rows($run)> 0){
		
		  $_SESSION['department']= $student_dept;
		
	  //echo "well";
	  
	  echo "<script>window.open('sea3.php','_self')</script>";
	}
	else{
		echo "<script>alert('This department no student not given payment fee.')</script>";
	}
		
		
		
	}
	
	else if($student_roll!='' and $student_dept!='' and $semester==''){
		
		   $check_user = "select * from payment where roll = '$student_roll' and department='$student_dept' ";
	
	       $run = mysqli_query($con,$check_user);
	 
	        if(mysqli_num_rows($run)> 0){
		
		          $_SESSION['roll']= $student_roll;
		
	             //echo "well";
	  
	            echo "<script>window.open('sea1.php','_self')</script>";
	       }
	        else{
		        echo "<script>alert('This student not given payment fee.')</script>";
	        }
		
		
	}
	
	else if($student_roll=='' and $student_dept!='' and $semester!=''){
		
			$check_user = "select * from payment where department = '$student_dept' and semester = '$semester' ";
	
	 $run = mysqli_query($con,$check_user);
	 
	if(mysqli_num_rows($run)> 0){
		
		  $_SESSION['department']= $student_dept;
		  $_SESSION['semester']= $semester;
		
	  //echo "well";
	  
	  echo "<script>window.open('sea4.php','_self')</script>";
	}
	else{
		echo "<script>alert('This Department and Semester no student give payment fee.')</script>";
	}
		
		
		
	}
	
	
	
	else if($student_roll!='' and $student_dept!='' and $semester!=''){
		
			$check_user = "select * from payment where roll = '$student_roll' and department = '$student_dept' and semester = '$semester' ";
	
	 $run = mysqli_query($con,$check_user);
	 
	if(mysqli_num_rows($run)> 0){
		
		  $_SESSION['roll']= $student_roll;
		  $_SESSION['department']= $student_dept;
		  $_SESSION['semester']= $semester;
		 
		
	  //echo "well";
	  
	  echo "<script>window.open('sea5.php','_self')</script>";
	}
	else{
		echo "<script>alert('This  student not given payment fee.')</script>";
	}
		
		
		
	}



}

?>


