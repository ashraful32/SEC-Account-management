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
   <h1>SEC Account Management Project</h1>
  <h2>Vision & Mission</h2>
  <h3>Our Vision :</h3>
  <p>To make our life easier. Corruption decrease and create responsibility in human life.</p>
   <h3>Our Mission :</h3>
   <p>Bangladesh will be a powerful country in the Digital world.</p>
    <h3> Our Slogan :</h3>
	<p>We are making Digital Bangladesh.</p>
</article>

<footer>Made by: Ashraful,Al-mamun and Rakib</footer>

</div>

</body>
</html>

