<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body onload = "isLicenseNumValid()">
<div id="wrapper">
	<div class="return">
		<a href="index.php">Login</a>
		<a href="registration.php" class="active">Register</a>
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
			<h2>Account Registration</h2>
			<p>All fields required</p>
		</div>
		<div>
			<form id="registration" action="registration.php" method="POST" id="regForm" name="regForm" autocomplete="off">
				<div>
					<label>National ID</label>
				</div>
				<div>
					<input value="<?php if(isset($nationalid)): echo $nationalid; endif;?>"
					<?php if(isset($errors['nationalid'])): ?>
					<?php endif;?>
					type="text" name="nationalid" id="nationalid" maxlength="11" value="" onkeyup="addHyphen()">
				</div>
				<div class="error" name="errors" id="iderror">
				<?php if(isset($errors['nationalid'])): echo $errors['nationalid']; endif;?>
				</div>

				<div>
					<label>License No.</label>
				</div>
				<div>
					<input readonly value="<?php if(isset($licenseno)): echo $licenseno; endif;?>"
					<?php if(isset($errors['licenseno'])): ?>
					<?php endif;?>
					type="text" name="licenseno" id="licenseno" maxlength="16">
				</div>
				<div class="error" name="errors" id="lnerror">
				<?php if(isset($errors['licenseno'])): echo $errors['licenseno']; endif;?>
				</div>
				<div>
					<label>First Name</label>
				</div>
				<div>
					<input value="<?php if(isset($fname)): echo $fname; endif;?>"
					<?php if(isset($errors['fname'])): ?>
					<?php endif;?>
					type="text" name="fname" id="fname">
				</div>
				<div class="error" name="errors" id="fnameerror">
				<?php if(isset($errors['fname'])): echo $errors['fname']; endif;?>
				</div>
				<div>
					<label>Last Name</label>
				</div>
				<div>
					<input value="<?php if(isset($lname)): echo $lname; endif;?>"
					<?php if(isset($errors['lname'])): ?>
					<?php endif;?> 
					type="text" name="lname" id="lname">
				</div>
				<div class="error" name="errors" id="lnameerror">
				<?php if(isset($errors['lname'])): echo $errors['lname']; endif;?>
				</div>
				<div>
					<label>Email</label>
				</div>
				<div>
					<input value="<?php if(isset($email)): echo $email; endif;?>"
					<?php if(isset($errors['email'])): ?>
					<?php endif;?> type="text" name="email" id="email">
				</div>
				<div class="error" name="errors" id="emailErr">
					<?php if(isset($errors['email'])): echo $errors['email']; endif;?>
				</div>
				<div>
					<label>Telephone</label>
				</div>
				<div id="separate">
					<input value="<?php if(isset($telephone)): echo $telephone; endif;?>"
					<?php if(isset($errors['telephone'])): ?>
					<?php endif;?>
					type="text" name="telephone" id="phone" maxlength="3"><b>-</b><input value="<?php if(isset($telephone2)): echo $telephone2; endif;?>"
					<?php if(isset($errors['telephone2'])): ?>
					<?php endif;?>
					type="text" name="telephone2" id="phone2" maxlength="4">
				</div>
				<div class="error" name="errors" id="phoneErr">
					<?php if(isset($errors['telephone'])): echo $errors['telephone']; endif;?><?php if(isset($errors['telephone2'])): echo $errors['telephone2']; endif;?>
				</div>
				<div>
					<label>Address 1</label>
				</div>
				<div>
					<input value="<?php if(isset($add2)): echo $add2; endif;?>"
					<?php if(isset($errors['add2'])): ?>
					<?php endif;?>
					type="text" name="add1" id="add1">
				</div>
				<div class="error" name="errors" id="add1error">
					<?php if(isset($errors['add2'])): echo $errors['add1']; endif;?>
				</div>
				<div>
					<label>Address 2</label>
				</div>
				<div>
					<input value="<?php if(isset($add2)): echo $add2; endif;?>"
					<?php if(isset($errors['add2'])): ?>
					<?php endif;?>
					type="text" name="add2" id="add2">
				</div>
				<div class="error" name="errors" id="add2error" >
					<?php if(isset($errors['add2'])): echo $errors['add2']; endif;?>
				</div>
				<div>
					<label>Parish</label>
				</div>
				<div>
					<select name="parish" id="parish">
						<option value="">--Choose a parish--</option>
						<option value="stphilip">St. Philip</option>
						<option value="christchurch">Christ Church</option>
						<option value="stmichael">St. Michael</option>
						<option value="stgeorge">St. George</option>
						<option value="stthomas">St. Thomas</option>
						<option value="stjohn">St. John</option>
						<option value="stjoseph">St. Joseph</option>
						<option value="standrew">St. Andrew</option>
						<option value="stpeter">St. Peter</option>
						<option value="stjames">St. James</option>
						<option value="stlucy">St. Lucy</option>
					</select>
				</div>
				<div></div>
				<div>
					<label></label>
				</div>
				<div id="submit">
					<div >
						<input type="submit" id="register" value="Register" name="add_driver">
					</div>
					<div>
						<input type="reset" value="Cancel" name="cancel_add">
						<input type="hidden" value="" name="validation_done_by_js" id="validation_done_by_js">
					</div>
				</div>	
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="jscript.js"></script>
</body>
</html>