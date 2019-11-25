<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
<div id="wrapper">
	<div class="return">
		<a href="index.php" class="active">Login</a>
		<a href="registration.php">Register</a>
		<a href="admin/index.php">Admin</a>
	</div>
	<div class="header">
		<div id="photo">
			<img src="images/logo.png">
		</div>
		<div>
			<h1>Barbados Revenue Authority</h1>
			<h1>Vehicle Licensing and Registration System</h1>
		</div>
		<div></div>
	</div>

	<div class="content">
		<div id="account">
			<h2>Driver Sign In</h2>
		</div>
		<div>

		<form action="index.php" method="POST" class="login" id="login" name="driverLoginForm" onsubmit="login(event)">
				<div>
					<label>National Id</label>
				</div>
				<div>
					<input 
					value="<?php if(isset($nationalid)): echo $nationalid; endif;?>"
					<?php if(isset($errors['nationalid'])): ?>
					<?php endif;?>
					type="text" name="nationalid" id="nationalid" placeholder="" maxlength="11" onkeyup="addHyphen()">
				</div>
				<div>
					<span class="error" id="iderror"><?php if(isset($errors['nationalid'])): echo $errors['nationalid']; endif;?></span>
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
				<div>
					<span class="error" id="pworderror"><?php if(isset($errors['pword'])): echo $errors['pword']; endif;?></span>
				</div>
				<div></div>
				<div>
					<input type="submit" value="Sign In" name="sign_in">
				</div>	
				<div></div>
			</form>
		</div>
		<div class="forgot">
			<a href="#">Forgot password?</a>
			<a href="registration.php">Sign Up</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="jscript.js"></script>
</body>
</html>