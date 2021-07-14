<?php
if(isset($_POST['submit']))
{
	//connection
	$con = mysqli_connect("localhost","root","","sparkbank");
	//variable and value passing
	$n = $_POST['nam'];
	$nn  = $_POST['no'];
	$de = $_POST['amountt'];
	if(($de)>0)
	{
      mysqli_query($con,"insert into transact(Sender,Reciever,Amount) values('$n','$nn','$de')");
	  echo"<script>alert('Congratulations!!!! Transaction Done Successfully')</script>" ;
	}
	else if(($de)<0)
	{
	    echo"<script>alert('Oops! Negative value cannot be transferred')</script>" ;
	}
	else
	{
		echo"<script>alert('Oops! Zero value cannot be transferred')</script>" ;
	}
}
?>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script type="text/javascript">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.btn
{
	  width:100px;
	  text-decoration:none;
	  line-height:35px;
	  display:inline-block;
	  background-color:#000099;
	  font-weight:medium;
	  color:white;
	  text-align:center;
	  vertical-align:middle;
	  user-select:none;
	  border:1px solid transparent;
	  font-size:14px;
	  opacity:1;
	  border-radius:15px;
  }
.btn:hover
{
	background:yellow;
	border:none;
	color:black;
	box-shadow:5px 5px 10px #999;
	transition:0.3s;
}
</style>
</head>
<body>
<header class="header">
<nav class="navbar navbar-style">
    <div class="container">
	    <div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toogle="collapse" data-target="">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  </button>
		 <a href=""><img class="logo" src="spark.png"></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="welcome.php"><strong>Home</strong></a></li>
		<li class="active"><a href="create.php"><strong>Create User</strong></a></li>
		<li class="active"><a href="fetch.php"><strong>User</strong></a></li>
		<li><a href="transaction.php"><strong>Transaction</strong></a></li>
		<li><a href="history.php"><strong>Transaction History</strong></a></li>
		<li><a href="aboutme.php"><strong>About Me</strong></a></li>
		</ul>
	</div>
  </nav>
<div class="big-text"><h1 style="text-align:center"><strong>Transaction Tab</strong></h1></div>
<div class="container">
  <div class="row">
    <div class="col-sm-6 banner-info">
	<br>
	<form class="form-horizontal" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nam" style="font-size:21px"><p style="color:#ff0080">Sender:</p></label>
      <div class="col-sm-10">
	    <input type="text" class="form-control" id="nam" placeholder="Enter Sender name" name="nam" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="no" style="font-size:21px"><p style="color:#ff0080">Recevier: </p></label>
	  <div class="col-sm-10">          
        <input type="text" class="form-control" id="no" placeholder="Enter Reciever name" name="no" required>
      </div>
	</div>
	<div class="form-group">
    <label class="control-label col-sm-2" for="amountt" style="font-size:21px"><p style="color:#ff0080">Amount:</p></label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="amountt" placeholder="Enter Transaction amount" name="amountt" required>
      </div>
    </div>
	<br>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 text-center">
        <button type="submit" name="submit" class="btn">Tranfer</button>
      </div>
    </div>
	</div>
	<div class="col-sm-6 banner-image">
	<img src="final.jpg" class="img-responsive">
	</div>
	</div>
</form>
</header>
</body>
</html>