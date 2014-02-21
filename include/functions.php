<?php
function fetchAll($table, $val1, $str1)
{	
	 $query="SELECT * FROM $table WHERE $val1=$str1";
	 if(!$query)
		{
		die("Database Query Failed "/*.mysql_error()*/);
		}
	$result=mysql_query($query);
	
	return $result;
}
?>