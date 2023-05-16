<?php


$id=$_GET['id'];

include '../dbconnect.php';
$sql="UPDATE `login` SET status = '1' WHERE email = '$id'";
if(mysql_query($sql,$conn))
	echo "<script>alert(' Approved!');location.href='21a_newreg_fishers.php';</script>";
     else
     	{"<script>alert('error!');location.href='21a_newreg_fishers.php';</script>";
		}

?>