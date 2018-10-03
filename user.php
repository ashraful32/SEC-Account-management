<?php

session_start();
if(!($_SESSION['roll'])){
	header("location: p_login.php");
}
else{
	$roll = $_SESSION['roll'];
	
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

	<h1> <center>Welcome SEC Account Management User Page </center></h1>
		
     </div>
	 

	 <div class = "con2">
	 


		<center> <h1> User Information </h1> </center>
		<h3><a href = "p_logout.php"> Log out </a> </h3>
			
   <table width='800' align = 'center' border = '3'>
    <tr bgcolor = 'yellow'>
	<th> Student Name </th>
	<th> Student Roll Number </th>
	<th> Student Department </th>
	<th> Student Email Address </th>
	<th> Student Mobile Number </th>
	<th> Student Password </th>
	</tr>
	
	
	<?php
	
	$con = mysqli_connect("localhost","root","","sec");
	/*mysqli_select_db("store");*/
	 
	 $query = "select * from management where roll='$roll'";
	 $run = mysqli_query($con,$query);
	 
	 while($row = mysqli_fetch_array($run)){
		 
		 $student_name = $row[0];
		 $Student_roll = $row[3];
		 $Student_department = $row[4];
		 $Student_email = $row[13];
		 $Student_Mobile = $row[14];
		 $Student_Pass = $row[18];
	 
	?>
	<tr align='center'>
	<td><?php echo $student_name; ?></td>
	<td><?php echo $Student_roll; ?></td>
	<td><?php echo $Student_department; ?></td>
	<td><?php echo $Student_email; ?></td>
	<td><?php echo $Student_Mobile; ?></td>
	<td><?php echo $Student_Pass; ?></td>
	
	</tr>
	<?php } ?>
		</table>
		
		<center> <h1> Payment Information </h1> </center>
		
		 <table width='800' align = 'center' border = '3'>
    <tr bgcolor = 'yellow'>
	<th> Student Name </th>
	<th> Student Roll Number </th>
	<th> Student Department </th>
	<th> Student Semester </th>
	<th> Payment Description </th>
	<th> Total Amount of Money </th>
	</tr>
	
	
	<?php
	
	$con = mysqli_connect("localhost","root","","sec");
	/*mysql_select_db("store");*/
	 
	 $query = "select * from payment where roll='$roll'";
	 $run = mysqli_query($con,$query);
	 
	 while($row = mysqli_fetch_array($run)){
		 
		 $student_name = $row[0];
		 $student_roll = $row[1];
		 $student_department = $row[2];
		 $student_semester = $row[3];
		 $payment_description = $row[4];
		 $total_amount = $row[5];
	?>
	<tr align='center'>
	<td><?php echo $student_name; ?></td>
	<td><?php echo $student_roll; ?></td>
	<td><?php echo $student_department; ?></td>
	<td><?php echo $student_semester; ?></td>
	<td><?php echo $payment_description; ?></td>
	<td><?php echo $total_amount; ?></td>
	</tr>
	<?php } ?>
		</table>
		
		</div>

</body>
</html>

