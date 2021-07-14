<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
  {
	  margin:0;
	  padding:0;
	  box-sizing:border-box;
  }
    .containerr{
	  padding:0 10%;
	  margin:40px auto 0;
  }
  .heading{
	  font-size:40px;
	  text-align:center;
	  color:#000099;
	  font-weight:700;
  }
  .table{
	  width:100%;
	  border-collapse:collapse;
	  align:center;
	}
  .table thead{
	  background-color:#000099;
  }
  .table thead tr th{
	  font-size:14px;
	  font-weight:600;
	  Letter-spacing:0.35px;
	  color:white;
	  opacity:1;
	  padding:12px;
	  vertical-align:top;
	  text-align:center;
	  border:2px solid #808080;
  }
  .table tbody tr td{
	  font-size:14px;
	  Letter-spacing:0.35px;
	  font-weight:normal;
	  color:black;
	  background-color:white;
	  padding:8px;
	  text-align:center;
	  border:2px solid  #808080;
  }
  .table tbody tr td .btn{
	  width:100px;
	  text-decoration:none;
	  line-height:35px;
	  display:inline-block;
	  background-color:red;
	  font-weight:medium;
	  color:white;
	  text-align:center;
	  vertical-align:middle;
	  user-select:none;
	  border:1px solid transparent;
	  font-size:14px;
	  opacity:1;
	  border-radius:20px;
  }
  .table tbody tr td .btn:hover
{
	background:yellow;
	border:none;
	color:black;
	box-shadow:5px 5px 10px #999;
	transition:0.3s;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
		<li><a href="#history.php"><strong>Transaction History</strong></a></li>
		<li><a href="aboutme.php"><strong>About Me</strong></a></li>
		</ul>
	</div>
  </nav>
<div class="containerr">
<div class="heading"><strong>Transaction History</strong></div>
   <br>
   <br>   
 <?php
    $con = mysqli_connect("localhost","root","","sparkbank");
    $s = mysqli_query($con,"select * from transact");
 ?>
 <table class="table">
    <thead>
      <tr>
	    <th>Sr No</th>
        <th>Sender Name</th>
        <th>Recevier Name</th>
        <th>Transaction Amount</th>
      </tr>
    </thead>
<?php
while($r = mysqli_fetch_array($s))
{
?>
      
      <tr>
	    <td><?php echo $r['Id']; ?></td>
        <td><?php echo $r['Sender']; ?></td>
		<td><?php echo $r['Reciever']; ?></td>
		<td><?php echo $r['Amount']; ?></td>
      </tr>
        
<?php
}
?>
</table>
</div>
</header>
</body>
</html>

