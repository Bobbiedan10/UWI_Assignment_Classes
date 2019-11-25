<?php
session_start();
	if(!isset($_SESSION["authenticated_admin"]))
	{
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
	<div class="header">
		<div id="photo">
			<img src="../images/logo.png">
		</div>
		<div>
			<h1>Barbados Revenue Authority</h1>
			<h1>Vehicle Licensing and Registration System</h1>
		</div>
		<div class="dropdown-menu">
			<input type="checkbox" id="menus" name="">
			<label for="menus"><i class="fa fa-reorder"></i></label>
			<div class="menu-content">
				<ul>
					<li><a href="../logout.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="user">
			<div>
				<label>Name:</label>
				<span id="activeName"><?=$_SESSION['authenticated_admin']['name']?></span>
			</div>
			<div>
				<label>Employee ID:</label>
				<span id="activeLiNo"><?=$_SESSION['authenticated_admin']['emp_id']?></span>
			</div>
		</div>
	<div class="content">
		<div class="contentinner">
			<a href="" id="menu"><div>
				<h3>New Drivers</h3>
			</div></a>
			<a href="" id="menu"><div>
				<h3>Registered Drivers</h3>
			</div></a>
			<a href="" id="menu"><div>
				<h3>New Vehicles</h3>
			</div></a>
			<a href="" id="menu"><div>
				<h3>Registered Vehicles</h3>
			</div></a>
		</div>
	</div>
	
</div>
<script type="text/javascript" src="../jscript.js"></script>
</body>
</html>