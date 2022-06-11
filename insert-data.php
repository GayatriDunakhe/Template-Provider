<?php
	$username=$_REQUEST['username'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$link=mysqli_connect('localhost', 'root', '', 'template provider');
	if(!$link)
	{
		echo 'Database is not connected';
	}
	else
	{
		$q="insert into user value(NULL, '$username', '$email', '$password')";
		$res=mysqli_query($link, $q);
		if($res)
		{
			echo '<script>alert("Sign up successfully"); window.location="sign-up.php";</script>';
		}
		else
		{
			echo '<script> alert("Oops, sign up unsuccessful"); window.location="sign-up.php"</script>';
		}
	}
?>