<?php
	function db_connection()
	{
		global $con;
		
		$hostname ="localhost";
		$username = "root";
		$password = "";
		$db_name = "template provider";
		
		$con = mysqli_connect($hostname,$username,$password,$db_name);
		
		if(!$con)
		{
			echo "MySQL connection Failed" . mysqli_connect_error();
		}
	}
?>