<?php
if(!isset($_SESSION["authenticated_user"]))
{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
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
			<h2>License Image Upload</h2>
		</div>
		<div>
			<form action="license_upload.php" method="POST" enctype="multipart/form-data" class="login" id="login" name="driverLoginForm">
				<div>
					<label>License Number</label>
				</div>
				<div>
					<input value="<?php if(isset($licenseno)): echo $licenseno; endif;?>"
					<?php if(isset($errors['licenseno'])): ?>
					<?php endif;?>
					type="text" name="licenseno" placeholder="">
				</div>
				<div>
					<span class="error" id="lnerror"><?php if(isset($errors['licenseno'])): echo $errors['licenseno']; endif;?></span>
				</div>
				<div>
					<label>Driver's License Image</label>
				</div>
				<div>
					<input value="<?php if(isset($liceFile)): echo $liceFile; endif;?>"
					<?php if(isset($errors['liceFile'])): ?>
					<?php endif;?>type="file" id="liceFile" name="liceFile">
				</div>
				<div>
					<span class="error" id="licefileErr"><?php if(isset($errors['liceFile'])): echo $errors['liceFile']; endif;?></span>
				</div>
				<div></div>
				<div id="button-holder">
                    <input type="submit" value="Upload" name="liceUpload">
                    <input type="reset" value="Cancel" name="reset">
				</div>	
				<div></div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="jscript.js"></script>
</div>
</body>
</html>