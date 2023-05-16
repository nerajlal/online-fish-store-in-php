<?php 
include "db_connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

	<?php 
	 
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['btnsignup'])){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$phone_number = trim($_POST['phone_number']);
		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['confirmpassword']);
		$username = $email;
		$isValid = true;

		// Check fields are empty or not
		if($name == '' || $email == '' || $phone_number == '' || $password == '' || $confirmpassword == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}

		// Check if confirm password matching or not
		if($isValid && ($password != $confirmpassword) ){
			$isValid = false;
			$error_message = "Confirm password not matching.";
		}

		// Check if Email-ID is valid or not
		if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$isValid = false;
		  	$error_message = "Invalid Email-ID.";
		}

		if($isValid){

			// Check if Email-ID already exists
			// $stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
			// $stmt->bind_param("s", $email);
			// $stmt->execute();
			// $result = $stmt->get_result();
			// $stmt->close();
			$check1a = mysql_query("SELECT login.username,register.email FROM login,register WHERE login.username='".$username."' OR register.email='".$username."'");
			$result = mysql_fetch_array($check1a);
			if($result){
				$isValid = false;
				$error_message = "Email-ID is already existed.";
			}
			
		}

		// Insert records
		if($isValid){
			// $insertSQL = "INSERT INTO register(name,email,phone_number,password) VALUES(?,?,?,?)";
			// $stmt = $con->prepare($insertSQL);
			// $stmt->bind_param("ssis",$name,$email,$phone_number,$password);
			// $stmt->execute();
			// $stmt->close();
			mysql_query("INSERT INTO register VALUES('$name','$email',$phone_number,'$password')");

			$success_message = "Account created successfully.";
		}
	}
	?>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<h2></h2>
			</div>

			<div class='col-md-6' >
					
				<form method='post' action=''>

					<h1>Sign Up Page</h1>
					<?php 
					// Display Error message
					if(!empty($error_message)){
					?>
						<div class="alert alert-danger">
						  	<strong>Error!</strong> <?= $error_message ?>
						</div>

					<?php
					}
					?>

					<?php 
					// Display Success message
					if(!empty($success_message)){
					?>
						<div class="alert alert-success">
						  	<strong>Success!</strong> <?= $success_message ?>
						</div>

					<?php
					}
					?>
				
					<div class="form-group">
					    <label for="fname"> Name :</label>
					    <input type="text" class="form-control" name="name" id="fname" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="email"> Email :</label>
					    <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="number">Phone Number :</label>
					    <input type="text" class="form-control" name="phone_number" id="phone_number" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="pwd">Confirm Password:</label>
					    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required="required" maxlength="80">
					</div>
					
					<button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
				</form>
			</div>
			
			
		</div>
	</div>
</body>
</html>