	<?php
	include "functions.php";
	db_connection();
	
	if(!empty($_POST['submit']))
	{
		mysqli_query($con,"insert into g_details (to_p,from_p,wishes,img_data,email)value('".$_POST['to_p']."','".$_POST['from_p']."',
		'".$_POST['wishes']."','".$_POST['img']."','".$_POST['email']."')") or die (mysqli_error($con));
		
		header("Location:gdetails.php?msg=success");
	}
?>