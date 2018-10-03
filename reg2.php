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
    text-decoration: none;
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

article div.equal{
max-width: 170px;
float: left;
line-height: 2;

}

article div.equal1{
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

.error{
	color: red;
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

<?php
	
	   $name = $fname = $mname = $roll = $department = $village = $post_office = $thana = $district = $par_village = $par_post_office = $par_thana = $par_district = $email = $mobile = $pass = "";
	$day = $month = $year = $dayErr = $monthErr = $yearErr = "";
	$user_login = $principle_login = $dept_head_login = $register_login = $data_login = $abc = "";
	$user_loginErr = $sq = $run="";
	$nameErr = $fnameErr = $mnameErr = $rollErr = $departmentErr = $villageErr = $post_officeErr = $thanaErr = $districtErr = $par_villageErr = $par_post_officeErr = $par_thanaErr = $par_districtErr = $emailErr = $mobileErr = $passErr= "";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["name"]))
		{
			$nameErr = "Name is required";
		}else{
			$name = test_input($_POST["name"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = " * Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["fname"]))
		{
			$fnameErr = "Father's Name is required";
		}else{
			$fname = test_input($_POST["fname"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
					$fnameErr = "Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["mname"]))
		{
			$mnameErr = "Mother's Name is required";
		}else{
			$mname = test_input($_POST["mname"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
					$mnameErr = "Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["roll"]))
		{
			$rollErr = "Name is required";
		}else{
			$roll = test_input($_POST["roll"]);
			 if (!preg_match("/^[0-9]*$/",$roll)) {
					$rollErr = " * Only number digit is allowed."; 
					
					
				}
				
				
				
				
		}
		
		if(empty($_POST["department"]))
		{
			$departmentErr = "Department is required";
		}else{
			$department = test_input($_POST["department"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$department)) {
					$departmentErr = " * Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["village"]))
		{
			$villageErr = "Village is required";
		}else{
			$village = test_input($_POST["village"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$village)) {
					$villageErr = " * Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["post_office"]))
		{
			$post_officeErr = "Post Office is required";
		}else{
			$post_office = test_input($_POST["post_office"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$post_office)) {
					$post_officeErr = " * Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["thana"]))
		{
			$thanaErr = "Thana is required";
		}else{
			$thana = test_input($_POST["thana"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$thana)) {
					$thanaErr = " * Only letters and white space allowed"; 
				}
		}
		
		
		if(empty($_POST["district"]))
		{
			$districtErr = "District is required";
		}else{
			$district = test_input($_POST["district"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$district)) {
					$districtErr = " * Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["par_village"]))
		{
			$par_villageErr = "Parmanent village is required";
		}else{
			$par_village = test_input($_POST["par_village"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$par_village)) {
					$par_villageErr = " * Only letters and white space allowed"; 
				}
		}
		
		
		if(empty($_POST["par_post_office"]))
		{
			$par_post_officeErr = "Parmanent Post Office is required";
		}else{
			$par_post_office = test_input($_POST["par_post_office"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$par_post_office)) {
					$par_post_officeErr = " * Only letters and white space allowed"; 
				}
		}
		
		if(empty($_POST["par_thana"]))
		{
			$par_thanaErr = "Parmanent Thana is required";
		}else{
			$par_thana = test_input($_POST["par_thana"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$par_thana)) {
					$par_thanaErr = " * Only letters and white space allowed"; 
				}
		}
		
		
			if(empty($_POST["par_district"]))
		{
			$par_districtErr = " Parmanent District is required";
		}else{
			$par_district = test_input($_POST["par_district"]);
			 if (!preg_match("/^[a-zA-Z ]*$/",$par_district)) {
					$par_districtErr = " * Only letters and white space allowed"; 
				}
		}
		
		
	if(empty($_POST["email"]))
	{
		$emailErr = "Email is required";
	}else{
		$email = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "Invalid email format";
		}
	}
	
	if(empty($_POST["mobile"]))
	{
		$mobileErr = "Mobile is required";
	}
	else{
		$mobile = test_input($_POST["mobile"]);
		 if (!preg_match("/^[0-9]*$/",$mobile)) {
      $mobileErr = "Only Number is allowed"; 
    }
	}
	
		if(empty($_POST["day"])){
		$dayErr = "Day is required.";
		}else{
			$day = test_input($_POST["day"]);
		}
   
		if(empty($_POST["month"])){
			$monthErr = "Month is required.";
		}else{
			$month = test_input($_POST["month"]);
		}
   
		if(empty($_POST["year"])){
			$yearErr = "Year is required.";
		}else{
			$year = test_input($_POST["year"]);
		}
		
		if(empty($_POST["pass"])){
			$passErr = "Password is required.";
		}else{
			$pass = test_input($_POST["pass"]);
		}
		
		
		
		
	}
	
	function test_input($data) {
		
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
	 
     }
	 
	 
?>
  <h1>SEC Account Management </h1>
  <h2>Create New Account</h2>
   <form method = "post">
   <fieldset>
   <legend> Student Information:</legend>
   
   <div class = "equal">
    Student's Name <br>
	Father's Name <br>
	Mother's Name<br>
	Student Roll Number<br>
	Student Department<br>
	Present Address
	<br>
	Village <br>
	Post office<br>
	Thana<br>
	District<br>
	Parmanent Address
	<br>
	Village <br>
	Post office <br>
	Thana <br>
	District <br>
	<br>
	Email<br>
	Mobile Number<br>
	Date of Birth<br>
	Password<br>
   </div>
   
   <div class ="equal1">
    
	: <input type = "text" name="name" value="<?php echo $name;?>" >
	<span class="error"><?php echo $nameErr;?></span>
	 <br>
	: <input type = "text" name="fname" value="<?php echo $fname;?>">
	<span class="error"><?php echo $fnameErr;?></span>
	 <br>
	: <input type = "text" name="mname" value="<?php echo $mname;?>">
	<span class="error"><?php echo $mnameErr;?></span>
	<br>
	: <input type = "text" name="roll" value="<?php echo $roll;?>">
	<span class="error"><?php echo $rollErr;?></span>
	<br>
	: <input type = "text" name="department" value="<?php echo $department;?>">
	<span class="error"><?php echo $departmentErr;?></span>
	<br><br>
	: <input type = "text" name="village" value="<?php echo $village;?>">
	<span class="error"><?php echo $villageErr;?></span>
	<br>
	: <input type = "text" name="post_office" value="<?php echo $post_office;?>" >
	<span class="error"><?php echo $post_officeErr;?></span>
	<br>
	: <input type = "text" name="thana" value="<?php echo $thana;?>" >
	<span class="error"><?php echo $thanaErr;?></span>
	<br>
	: <input type = "text" name="district" value="<?php echo $district;?>" >
	<span class="error"><?php echo $districtErr;?></span>
	<br><br>
	: <input type = "text" name="par_village" value="<?php echo $par_village;?>">
	<span class="error"><?php echo $par_villageErr;?></span>
	<br>
	: <input type = "text" name="par_post_office" value="<?php echo $par_post_office;?>" >
	<span class="error"><?php echo $par_post_officeErr;?></span>
	<br>
	: <input type = "text" name="par_thana" value="<?php echo $par_thana;?>" >
	<span class="error"><?php echo $par_thanaErr;?></span>
	<br>
	: <input type = "text" name="par_district" value="<?php echo $par_district;?>" >
	<span class="error"><?php echo $par_districtErr;?></span>
	<br><br>
	: <input type = "text" name="email" value="<?php echo $email; ?>" >
	<span class="error"><?php echo $emailErr;?></span>
	<br>
	: <input type = "text" name="mobile" value="<?php echo $mobile; ?>">
	<span class="error"><?php echo $mobileErr;?></span>
	<br>
	
		
	: Day 
	<select size="1" name="day">
	<option value="1" label="01">01</option>
	<option value="2" label="02">02</option>
	<option value="3" label="03">03</option>
	<option value="4" label="04">04</option>
	<option value="5" label="05">05</option>
	<option value="6" label="06">06</option>
	<option value="7" label="07">07</option>
	<option value="8" label="08">08</option>
	<option value="9" label="09">09</option>
	<option value="10" label="10">10</option>
	<option value="11" label="11">11</option>
	<option value="12" label="12">12</option>
	<option value="13" label="13">13</option>
	<option value="14" label="14">14</option>
	<option value="15" label="15">15</option>
	<option value="16" label="16">16</option>
	<option value="17" label="17">17</option>
	<option value="18" label="18">18</option>
	<option value="19" label="19">19</option>
	<option value="20" label="20">20</option>
	<option value="21" label="21">21</option>
	<option value="22" label="22">22</option>
	<option value="23" label="23">23</option>
	<option value="24" label="24">24</option>
	<option value="25" label="25">25</option>
	<option value="26" label="26">26</option>
	<option value="27" label="27">27</option>
	<option value="28" label="28">28</option>
	<option value="29" label="29">29</option>
	<option value="30" label="30">30</option>
	<option value="31" label="31">31</option>
	
	</select>

	Month
	<select size="1" name="month">
	<option value="January" label="January">January</option>
	<option value="February" label="February">February</option>
	<option value="March" label="March">March</option>
	<option value="April" label="April">April</option>
	<option value="May" label="May">May</option>
	<option value="June" label="June">June</option>
	<option value="July" label="July">July</option>
	<option value="August" label="August">August</option>
	<option value="September" label="September">September</option>
	<option value="October" label="October">October</option>
	<option value="November" label="November">November</option>
	<option value="December" label="December">December</option>
	</select>
	
	Year <select size="1" name="year">

	<option value="1979" label="1979">1979</option>
	<option value="1980" label="1980">1980</option>
	<option value="1981" label="1981">1981</option>
	<option value="1982" label="1982">1982</option>
	<option value="1983" label="1983">1983</option>
	<option value="1984" label="1984">1984</option>
	<option value="1985" label="1985">1985</option>
	<option value="1986" label="1986">1986</option>
	<option value="1987" label="1987">1987</option>
	<option value="1988" label="1988">1988</option>
	<option value="1989" label="1989">1989</option>
	<option value="1990" label="1990">1990</option>
	<option value="1991" label="1991">1991</option>
	<option value="1992" label="1992">1992</option>
	<option value="1993" label="1993">1993</option>
	<option value="1994" label="1994">1994</option>
	<option value="1995" label="1995">1995</option>
	<option value="1996" label="1996">1996</option>
	<option value="1997" label="1997">1997</option>
	<option value="1998" label="1998">1998</option>
	<option value="1999" label="1999">1999</option>
	<option value="2000" label="2000">2000</option>
	<option value="2001" label="2001">2001</option>
	<option value="2002" label="2002">2002</option>
	<option value="2003" label="2003">2003</option>
	<option value="2004" label="2004">2004</option>
	<option value="2005" label="2005">2005</option>
	<option value="2006" label="2006">2006</option>
	<option value="2007" label="2007">2007</option>
	<option value="2008" label="2008">2008</option>
	<option value="2009" label="2009">2009</option>
	<option value="2010" label="2010">2010</option>
	<option value="2011" label="2011">2011</option>
	<option value="2012" label="2012">2012</option>
	<option value="2013" label="2013">2013</option>
	<option value="2014" label="2014">2014</option>
	<option value="2015" label="2015">2015</option>
	<option value="2016" label="2016">2016</option>
	<option value="2017" label="2017">2017</option>
	
	</select> <br>
	
	: <input type = "password" name="pass" value="<?php echo $pass; ?>"> 
	<span class="error"><?php echo $passErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Submit">
	
   </div>
	 </fieldset>
	 </form>
	 <?php
		if(empty($_POST["submit"]))
	{
		$sub = "";
	}else{

	if(($nameErr == "") && ($fnameErr == "") && ($mnameErr == "") && ($rollErr == "") && ($departmentErr == "") && ($villageErr =="")&&($post_officeErr=="")&&($thanaErr=="")&&($districtErr=="") && ($par_villageErr=="")&& ($par_post_officeErr =="")&& ($par_thanaErr == "")&& ($par_districtErr =="")&&($emailErr=="") && ($mobileErr=="")&& ($passErr==""))
	{

		 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "sec";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
		
		/*$roll = $_POST['roll'];
		
		echo $roll;
		 
		 $sq = "select roll from management where  roll='$roll' ";
		 
		   $run = mysql_query($sq);
		   
		   
		   
		   if(mysql_num_rows($run)<= 0){
			  echo "<script>alert('your roll number is already exist')</script>";
			  
			
		 }*/
		//else{
			
						
			$sql = "INSERT INTO management(student_name,father_name,mother_name,roll,department,village,post_office,thana,district,par_village,par_post_office,par_thana,par_district,email,mobile,day,month,year,password,user_login) 
		     VALUES ('$name', '$fname', '$mname','$roll','$department','$village','$post_office','$thana','$district','$par_village','$par_post_office','$par_thana','$par_district','$email','$mobile','$day','$month','$year','$pass','$user_login');";

		       if ($conn->multi_query($sql) === TRUE) {
		            /*echo "New records created successfully";*/
		
		         echo "<script>window.open('reg_complete.php','_self')</script>";
		          } else {
			      echo "Error: " . $sql . "<br>" . $conn->error;
					 
				  }
				  
		//}
		
		
		$conn->close();
		}
		else{
			$sub ="";
		}	
	
		}
	
	 ?>
</article>

<footer>Made by: Ashraful,Al-mamun and Rakib</footer>

</div>

</body>
</html>


