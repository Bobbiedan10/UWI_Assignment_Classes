<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="jscript.js"></script>
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
			<h2>Upload a Copy of your Insurance Cover Note</p>
		</div>
		<div>
			<form action="cover_note_upload.php" method="POST" enctype="multipart/form-data" id="registration" name="policyNumForm" onsubmit="">
				<div>
					<label>Policy Number</label>
				</div>
				<div>
					<input type="text" name="policyNumber" id="policyNumber" maxlength="11" value="" onkeyup="addHyphen()">
				</div>
				<div class="error" id="pNerror">
				
				</div>

				<div>
					<label>Date Issued</label>
				</div>
				<div>
					<input type="date" name="dateIssued" id="dateIssue">
				</div>
				<div class="error" id="isdateerror">
					
				</div>
				<div>
					<label>Date Expired</label>
				</div>
				<div>
					<input type="date" name="dateExpired" id="dateExpired">
				</div>
				<div class="error" id="exdateerror">
					
				</div>
				<div>
					<label>Insurance Cover Note</label>
				</div>
				<div>
					<input value="<?php if(isset($coverNote)): echo $coverNote; endif;?>"
					<?php if(isset($errors['coverNote'])): ?>
					<?php endif;?>
					type="file" name="coverNote" id="coverNote">
				</div>
				<div class="error" id="cNerror">
				<?php if(isset($errors['coverNote'])): echo $errors['coverNote']; endif;?>
				
                </div>
                <div></div>
				<div id="submit">
					<div >
					<input type=hidden name="cover_note_check" value="">
					<input type="submit" value="Upload" name="upload">
					</div>
					<div>
						<input type="reset" value="Cancel" name="cancel">
						<input type="hidden" name="MAX_FILE_SIZE" value="3000000">
						
					</div>
				</div>	
			</form>
		</div>
	</div>
</div>
</body>
</html>