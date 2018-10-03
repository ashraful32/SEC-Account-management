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
	 
		<center> <h1> User Information </h1> </center>
		<h3><a href = "data_logout.php"> Log out </a> </h3>
			
   <table width='800' align = 'center' border = '3'>
    <tr bgcolor = 'yellow'>
	<th> Student Name </th>
	<th> Student Roll Number </th>
	<th> Student Department </th>
	<th> Student Semester </th>
	<th> Student Payment Description </th>
	<th> Amount of Taka </th>
	
	</tr>
	
	
	<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("store");
	 
	 $query = "select * from payment";
	 $run = mysql_query($query);
	 
	 while($row = mysql_fetch_array($run)){
		 
		 $student_name = $row[0];
		 $roll = $row[1];
		 $department = $row[2];
		 $semester = $row[3];
		 $payment_des = $row[4];
		 $t_taka = $row[5];
	 
	?>
	<tr align='center'>
	<td><?php echo $student_name; ?></td>
	<td><?php echo $roll; ?></td>
	<td><?php echo $department; ?></td>
	<td><?php echo $semester; ?></td>
	<td><?php echo $payment_des; ?></td>
	<td><?php echo $t_taka; ?></td>
	
	</tr>
	<?php } ?>
		</table>
   
	 
	 </div>
		

</body>
</html>










