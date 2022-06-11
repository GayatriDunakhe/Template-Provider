	<?php
	include "functions.php";
	db_connection();
	
	if(!empty($_POST['submit']))
	{
		if(isset($_POST['submit']))
		{
			if(getimagesize($_FILES['logo']['tmp_name'])== FALSE)
			{
				echo "<script>alert('Please select any image'); window.location='image_upload.php';</script>";
			}
			else
			{
				$image=addslashes($_FILES['logo']['tmp_name']);
				$name=addslashes($_FILES['logo']['name']);
				$image=file_get_contents($image);
				$image=base64_encode($image);
				mysqli_query($con,"insert into e_details (company_name,tagline,address,
				mobile_no,web_name,logo,post,state,city,img_data,email)value('".$_POST['c_name']."','".$_POST['tagline']."',
				'".$_POST['address']."','".$_POST['mobile']."','".$_POST['w_name']."',
				'".$image."','".$_POST['post']."','".$_POST['state']."','".$_POST['city']."','".$_POST['img']."','".$_POST['email']."')") or die (mysqli_error($con));
				
				header("Location:edetails.php?msg=success");
				
			}
		}
		
	}
	
?>