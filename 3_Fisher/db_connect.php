<?php
//DATABASE Name will come here
$database = "dbc_online_fish_store"; /* Database name */

$host = "localhost";    /* Host name */
$user = "root";         /* User */
$password = "";         /* Password */

session_start();
$connection=mysql_connect($host,$user,$password);
$db=mysql_select_db($database,$connection);
if (!$db) {
	die("Database connection failed ! >> ".mysqli_connect_error());
}else
{
	//echo "Success";
}
?>