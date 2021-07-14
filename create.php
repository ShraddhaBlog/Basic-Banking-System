<?php
if(isset($_POST['ins']))
{
	//connection
	$con = mysqli_connect("localhost","root","","sparkbank");
	//variable and value passing
	$p = $_POST['Accno'];
	$pr = $_POST['Namee'];
	$det = $_POST['Emaill'];
	$de = $_POST['Balancee'];
	if(($de)>0)
	{
    
	mysqli_query($con,"insert into user(Accno,Name,Email,Balance) values('$p','$pr','$det','$de')");
	echo "<script>alert('Congratulations!!!! User Created Successfully')</script>" ;
	}
	else
	{
		echo"<script>alert('Please enter valid Balance')</script>";	
	}
}
?>
<html>
<head>
<title> Student Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<script type="javascript">
function validate()
{
var Name =document.forms["stud_form"]["Name"].value; 
var Enroll=document.forms["stud_form"]["Enrollment Id"].value; 
var Branch= document.forms["stud_form"]["Branch"].value;
var DOB= document.forms["stud_form"]["Date Of Birth"].value; 
var Mobile =document.forms["stud_form"]["Mobile No"].value; 
var cor=/^\(?[0-9]{3})\)?[-.]?([0-9]{3})[-.]?([0-9]{4})$/;
if(Name==null||Name=="")
{
alert("Name cannot be blank");
return false;
}
else if(Enroll==null||Enroll=="")
{
alert("Enrollment Id cannot be blank");
return false;
}
else if(Branch==null||Branch=="")
{
alert("Branch cannot be blank");
return false;
}
else if(DOB==null||DOB=="")
{
alert("Date Of Birth cannot be blank");
return false;
}
if(document.stud_form.Mobile No.value=cor)
{
alert("Date Of Birth cannot be blank");
document.stud_form.Mobile No.focus();
return false;
}
}


</script>
<style>
h1{
text-align:center;
color:white;
}
body{
margin:0;
padding:0;
background:url('./lo.jpg')no-repeat;
background-size:cover;
background-position:center;
font-family:verdana;
}

*{
  margin:0;
  padding:0;
  font-family:verdana;
}
#abc{
  width:100%;
  height:100vh;
  background-image: url(img2.jpg);
  background-size: cover;
}
nav{
  width: 100%;
  height: 50px;
  background-color: #0005;
  line-height: 50px;
}
nav ul{
  float: right;
  margin-right: 30px;
}
nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.7s all;
}
nav ul li:hover{
  background-color:#088;
}
nav ul li a{
  text-decoration: none;
  color: #fff;
  padding: 30px;
}
.registerr
{
width:400px;
height:570px;
background:rgba(0,0,0,0.5);
color:#fff;
top:58%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding :50px 30px;
margin: 9px  0;
}
.registerr h1{
font-size:30px;
text-align:center;
text-transform:uppercase;

}
.registerr p{
top:70%;
font-size:18px;
margin:10px 0;

font-family:verdana;
}
.registerr input{
font-size:15px;
width:100%;
padding:7px 5px;
border:1px;
outline:none;
border-radius:5px;
font-family:verdana;

}
.registerr input:hover{
cursor:pointer;
background-color:#B2BEB5;
}
.registerr button
{

font-size:16px;
font-weight:bold;
margin:20px 0;
padding:10px 11px;
width:60%;
border-radius:20px;
border:0;
outline-0;
margin-left:65px;
height:40px;
background-color:red;
color:white;
}
.registerr button:hover{
cursor:pointer;
background:#39dc79;
color:#000;
}
</style>


<body>
<h1>SPARKS FOUNDATION BANK</h1>
<br>
<div id="abc">
   
<div class="registerr">
<form  name="stud_form" method="post" onsubmit="return validate()" >
<h1>CREATE USER</h1>
<br>
<p>Account Number</p>
<input type="text" name="Accno" placeholder=" Enter Account Number" required>
<br><p>Customer Name</p>
<input type="text" name="Namee" placeholder="Enter Name" required>	
<br><p>Customer Email</p>
<input type="text" name="Emaill" placeholder="Enter Email" required>	
<br><p>Customer Balance</p>
<input type="number" name="Balancee" placeholder="Enter Balance" required>	
<button type="register" name="ins">Create</button>
<button type="register"><a href="welcome.php">Procced</a></button>
</div>
</div>
</body>
</html>

