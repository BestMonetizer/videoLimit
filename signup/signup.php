<?php
require_once('../include/connect.php');

if(isset($_POST['signup']))
{

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$crypt=sha1($password);
$sql="insert into user (`username`,`password`) VALUES ('$username','$crypt')";
$result=mysql_query($sql);
if($result)
{
echo "You are successfully registered";
}
else
{
echo "Registration Failed.! Please try again";
}
}
?>