<?php
/**
 * including the config.php file to define the database and user parameters for the mysqli function
 * change the parameters in config.php file
 * */

//require_once("/include/config.php");

define("db_server","localhost");	//define the server host
define("db_user","sshare");			//the database user goes here
define("db_pass","sshare");			//password for the database user
define("db_name","NAG");			//database name

$connection=mysql_connect(db_server, db_user, db_pass);

	if(!$connection)
	{
	die("Database Connection failed".mysql_error());
	}

	$db_select=mysql_select_db(db_name,$connection);
	if(!$db_select)
	{
	die("Database Selection failed".mysql_error());
	}
	
	
/*
 * USE THIS IF MYSQLI IS REQUIRED
 * $mysqli = new mysqli(db_server, db_user, db_pass, db_name);
 * 
 * */
 
/*
 * 
 making mysqli global to allow access to the database connection
 * 
 
GLOBAL $mysqli;


if(mysqli_connect_errno()) {
	echo "The Database server cannot be reached at this time";
	exit();
}
*/

?>