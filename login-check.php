<?php
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	
	//$username=mysql_real_escape_string($username);
	//$password=mysql_real_escape_string($password);
	
	$link=mysqli_connect('localhost','root','','template provider');
	
	$q="select * from user where username='$username' and password='$password'";
	$res=mysqli_query($link, $q);
	$count=mysqli_num_rows($res);
	$row=mysqli_fetch_array($res);
	if($row['username']==$username && $row['password']==$password)
	{
		session_start();
		$_SESSION['id']=$row['id'];
		header("location:home.php");
	}
	else
	{
		echo '<script>alert("Fail to login, Please try again"); window.location="sign-up.php";</script>';
	}
?>