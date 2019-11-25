<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
	<div class="return">
		<a href="../index.php" >Login</a>
		<a href="../registration.php">Register</a>
		<a href="index.tpl.php" class="active">Admin</a>
	</div>
	<div class="header">
		<div id="photo">
			<img src="../images/logo.png">
		</div>
		<div>
			<h1>Barbados Revenue Authority</h1>
			<h1>Vehicle Licensing and Registration System</h1>
		</div>
		<div></div>
	</div>

	<div class="content">
		<div id="account">
			<h2>Administration Login</h2>
		</div>
		<div>
			<form action="index.php" method="POST" class="login" id="login" name="adminLoginForm">
				<div>
					<label>Employee Id</label>
				</div>
				<div>
					<input value="<?php if(isset($employeeid)): echo $employeeid; endif;?>"
					<?php if(isset($errors['employeeid'])): ?>
					<?php endif;?>
					type="text" name="employeeid" placeholder="EmployeeId">
				</div>
				<div class="error" name="empiderror" id="empiderror">
				<?php if(isset($errors['employeeid'])): echo $errors['employeeid']; endif;?>
				</div>
				<div>
					<label>Password</label>
				</div>
				<div>
					<input value="<?php if(isset($pword)): echo $pword; endif;?>"
					<?php if(isset($errors['pword'])): ?>
					<?php endif;?>
					type="password" name="pword" placeholder="Password">
				</div>
				<div class="error" id="pworderror"><?php if(isset($errors['pword'])): echo $errors['pword']; endif;?></div>
				<div></div>
				<div>
					<div>
						<input type="submit" value="Sign In" name="sign_in">
					</div>
				</div>	
				<div></div>
				<div></div>
				<div>
					<a href="#">Recover Password</a>
				</div>
				<div></div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="../jscript.js"></script>
</body>
</html>