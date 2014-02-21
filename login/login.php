<?php
require_once('../include/connect.php');

if(isset($_POST['login']))
{

$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$cipher=sha1($password);

$sql="SELECT * FROM user WHERE username='$username' and password='$cipher'";
if(!$sql)
		{
		die("Database Query Failed ".mysql_error());
		}
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	$store=mysql_fetch_array($result);
	if($count==1)
	{
		session_start();
		$_SESSION['password']=$store['password'];
		$_SESSION['id']=$store['id'];
		$_SESSION['status']=$store['status'];
		header("location:/");
	}
	else
	{
		echo "Login Attempt Failed<br/><a href=\"/login\">Go Back</a>";
	}
}
?>