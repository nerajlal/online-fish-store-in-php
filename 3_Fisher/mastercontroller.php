<?php
include 'db_connect.php';


//-----------------------------------NEW USER REGISTER ---------------------------------------
if(isset($_POST['btnsignup']))
{
	//echo "<script>location.href='Universal_register.php';</script>";
	// Register user
	
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
			echo "success end";echo "<script>location.href='index.php'";
			echo "<script>Alert('Registered Successfully!')</script>";
			
		}
	
	
}

//--------------------------------------------------------------------------NEW USER REGISTER CLOSE

//-----------------------------------USER REGISTER ---------------------------------------
if(isset($_POST['regsub']))
{
$username=$_POST['reg_username'];
$pass1=$_POST['reg_pass1'];
$pass2=$_POST['reg_pass2'];
$name=$_POST['reg_name'];
$email=$_POST['reg_email'];


$c = 0;
$check = 0;
//-----------PASSWORD CHECK----------
	if($pass1==$pass2)
	{
		$p=$pass1;
		$c = $c + 1;
	}
	else
	{
		echo "<script>alert('Password not matched');</script>";
		echo "<script>location.href='index.php';</script>";
		
	}
//-----------PASSWORD CHECK----------


//-----------Login id CHECK----------
	$check1a = mysql_query("select username from userreg where username='".$username."'");
	$check1b = mysql_query("select email from userreg where email='".$email."'");
	$check1c = mysql_query("select username from login where username='".$username."'");

	//$ccc = ;
	if(mysql_num_rows($check1c) > 0)
	{
		
		echo"<script>alert('Username already taken');</script>";		
		echo "<script>location.href='index.php'</script>";
	}
	else
	{
		$c = $c + 1;
	}
		
	if (mysql_num_rows($check1a) > 0)
	{
		$error1 = "Username already taken!";
		echo "<script>alert('username already taken');</script>";
		echo "<script>location.href='index.php';</script>";
		//header('location:index.php');
		//header('Location:index.php?username=false');
	}else 
		{
		$c = $c + 1;
		}
	if(mysql_num_rows($check1b) > 0)
	{
		$error2 = "Username already taken!";
		echo "<script>alert('Email already taken');</script>";
		echo "<script>location.href='index.php';</script>";
		//header('location:index.php');
		//header('Location:index.php?email=false');
	}else
		{
		$c = $c + 1;
		}
	

//-----------Login id CHECK----------
if( $c == 4 )
	{
	$check = 1;
	}

if($check == 1)
{
	//userreg
	$id1=maxvalue('user_id','userreg');
	echo $id1;
	mysql_query("insert into userreg values('$id1','$username','$pass1','userdocs/default.jpg','$name','','','','','','$email','','0')");
	//echo "insert into userreg values('$id1','$username','$pass1','NULL','$name','NULL','NULL','NULL','NULL','NULL','$email','','0')";

	//login
	$id2 = maxvalue('unique_id','login');
	mysql_query("insert into login values('$id2','$username','$pass1','1','user')");
	echo "insert into login values('$id2','$username','$pass1','1','user')";

	//user_doc
	$id3 = maxvalue('doc_id','user_doc');
	mysql_query("insert into user_doc values('$id3','$id1','','','','','','','')");

	//add_vehicle
	$id4 = maxvalue('v_id','add_vehicle');
	mysql_query("insert into add_vehicle values('$id4','$id1','','','','','','','','','','')");

	//Drowsi_data
	$id5 = maxvalue('package_id','drowsi_data');
	$dd=mysql_query("insert into drowsi_data values('$id5','$id1','0','','','','','0','','','')");
	//echo "insert into drowsi_data values('$id5','$id1','0','','','','','0','','')";

	
	//header('Location:index.php?userreg=true');
	echo "<script>alert('Registration Successful!');</script>";
	//header('Location:index.php');
	echo "<script>location.href='index.php';</script>";
}
}

//--------------------------------------------------------------------------USER REGISTER CLOSE





// ------------------------------------------------------------------------------LOGIN -->
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $count1=0; $count2=0;
  $count1=substr_count($username, "'");
  $count2=substr_count($password, "'");
  $err=0;
  if ($count1>0 || $count2>0)
     $err=1;

$query = mysql_query("SELECT * FROM login WHERE username='".$username."' AND password='".$password."'");
$resultcheck = mysql_num_rows($query);
if($resultcheck > 0)
{
	$flag=0;
	while($row = mysql_fetch_array($query))
		{
		$flag=1;
		$type = $row['type'];
	
		echo $row['type'];
		switch ($type) {
			case 'user':
				$table='userreg';
				break;
			case 'admin':
				$table='userreg';
				break;
		
			default:
				echo "<script>alert('Invalid User ID and Password!')</script>";
				echo "<script><a href='index.php?msg=Invalid Username or Password'></a></script>";
				break;
		}
	

	    $_SESSION['username'] = $username;
		}

	// $xx = mysql_query("SELECT * FROM ".$table." WHERE username='".$username."'");
	// echo "SELECT * FROM ".$table." WHERE username='".$username."'";	
	// while ($xc = mysql_fetch_array($xx))
	// {
	// $name = $xc['name'];
	// if($type == 'user')
	// 		{
	// 		$x=$xc['user_id'];
	// 		$stat = $xc['user_status'];
	// 		}

	// 	else if($type == 'officer')
	// 		{
	// 		$x=$xc['off_id'];
	// 		$stat = $xc['off_status'];
	// 		}
	// 	else if($type == 'admin')
	// 	{
	// 		$x=$xc['adm_id'];
	// 		$stat = 1;
	// 	}
	// 	else {
	// 		$x=$xc['off_id'];
	// 		$stat = $xc['off_status'];
	// 	}

	// $unique_id = $x;
	
	
	// $_SESSION['unique_id'] = $unique_id;
	// $_SESSION['name'] = $name;
	// $_SESSION['status'] = $status;
	
	// }
  	if($err>0)
  		{
  			echo "invalid 0000";
  			echo "<script>alert('Access Denied!... Try Again')</script>";
  			//echo "<script><a href='index.php?msg=Invalid Username or Password'></a></script>";
		}
	else if($flag==1 && $type=="user")
			{
				echo "<script>location.href='User_home.php'</script>";
				//echo "Successfull";
			}
		else if($flag==1 && $type=="admin")
				{
					echo "<script>location.href='admin_home.php'</script>";
				}
				
		else if($flag==1 && $type=="officer")
				{
					echo "<script>location.href='officer_home.php'</script>";
				}
		
		else if($flag==1 && $type=="trafficpolice")
				{
					echo "Tp";
					echo "<script>location.href='tp_home.php'</script>";
				}
		}
else
{
		//echo "<script>alert('Invalid Username And Password!')</script>";
		//echo "<script>location.href='index.php?msg=Invalid Username or Password'</script>";
		echo "invalid no rows";
		echo "<script>alert('Invalid User ID and Password!')</script>";
		echo "<script>location.href='index.php'</script>";
}

}
// ------------------------------------------------------------------------------LOGIN CLOSE -->

?>