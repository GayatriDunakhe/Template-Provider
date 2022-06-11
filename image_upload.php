<?php
	error_reporting(0);
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_socket_timeout', 300);
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title> TEMPRO </title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<!--<link rel="stylesheet" href="home.css" />-->
		<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
		*{
			outline: none !important;
			scroll-behavior: smooth;
		}
			body{
				margin:0;
				padding:0;
				background-image:;
				background:#efefef;
				font-size: 16px;
				color:#777;
				font-family: sans-serif;
				font-weight:300;
			}
			#login-box{
				position: relative;
				margin:5% auto;
				padding:20px;
				height:400px;
				width:300px;
				background:#fff;
				//background-image:linear-gradient(27deg,#004E95 50%, #013A6B 50%);
				box-shadow: 0 2px 4px rgba(0,0,0,0.6);
				opacity:40px;
			}
			.static{
				overflow:auto;
			}
			input[type="text"],input[type="file"]{
				display: block;
				box-sizing:border-box;
				margin-bottom:10px;
				padding:4px;
				width:220px;
				height:32px;
				border:none;
				outline:none;
				border-bottom:1px solid #aaa;
				font-family: sans-serif;
				font-weight:400;
				font-size:15px;
				transition:0.2s ease;
				background-color: transparent;
			}
			h1{
				font-weight:300;
				font-size:28px;
			}
			input[type="submit"]{
				margin-bottom:10px;
				width:120px;
				height:32px;
				background:#f44336;
				border:none;
				border-radius:2px;
				color:#fff;
				font-family:sans-serif;
				font-weight:500;
				text-transform:uppercase;
				transition:0.2s ease;
				cursor:pointer;
			}
			input[type="submit"]:hover,
			input[type="submit"]:focus{
				background: #ff5722;
				transition:0.2s ease;
			}
			main{
				width:80%;
				margin:0px auto;
			}
			.thumnails{
				width:65%;
				float:left;
				margin:10px;
				padding:0px;
				box-sizing:border-box;
			}
			.thumnails img{
				width:100%;
				height:auto;
			}
			.thumnails img:hover{
				box-shadow: 0 4px 10px rgba(0,0,64,0.6);
			}
			.back{
				background:#f44336;
				color: white;
				padding: 5px 10px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
			}
			.back:hover{
				background: #ff5722;
				transition:0.2s ease;
			}
			.blog{
				position:relative;
				padding:100px 0;
				background:#fff;
				//text-align:center;
			}
			.btnD2{
				background:#262626;
				color:#fff;
				border-radius:10px;
				padding: 5px 10px;
				float:right;
				text-decoration: none;
			}
			.btnD2:hover{
				box-shadow: 0 4px 10px rgba(0,0,64,0.6);
			}

		</style>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	</head>
	<body data-spy="scroll" data-target=".nevbar" data-offset="50">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				<div class="container">
				  <a class="navbar-brand" href="#">TEMPRO</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="#home">Image Upload<!-- <span class="sr-only">(current)</span>--></a>
					  </li>					
					  <li class="nav-item">
						<a class="nav-link" href="#upload_img">Upload Templates</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#details">Templates Details</a>
					  </li>
					</ul>
					
				  </div>
			  </div>
			</nav>
		</header>
		<div class="jumbotron jumbotron-fluid height100p banner" id="home">
		  <div class="container h100">
			<div class="contentBox h100 static">
				<div>
				<div id='login-box' data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
				<form method="post" enctype="multipart/form-data">
					<h1>Uploading Image</h1>
					Upload File: <input type="file" name="image">
					<br>
					<input type="submit" name="submit" value="Upload">
				</form></div></div></div></div></div>
			<?php
			if(isset($_POST['submit']))
			{
				if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
				{
					echo "<script>alert('Please select any image'); window.location='image_upload.php';</script>";
				}
				else
				{
					$image=addslashes($_FILES['image']['tmp_name']);
					$name=addslashes($_FILES['image']['name']);
					$image=file_get_contents($image);
					$image=base64_encode($image);
					saveimage($name,$image);
				}
			}
			echo "<div class='jumbotron jumbotron-fluid height100p banner' id='upload_img'>";
			echo "<div class='container h100'>";
			echo "<div class='contentBox h100 static'>";
			echo "<div>";
			echo "<h1 data-aos='zoom-out-up' data-aos-duration='1000' data-aos-delay='0'>Uploaded images</h1>";
			displyimage();
			function saveimage($name,$image)
			{
				$con=mysqli_connect("localhost", "root", "");
				mysqli_select_db($con, "template provider");
				$qur="insert into image_file (name, image) values ('$name','$image')";
				$result=mysqli_query($con, $qur);
				if($result)
				{
					echo "<script>alert('Image uploaded'); window.location='image_upload.php';</script>";
				}
				else
				{
					echo "<script>alert('Image not uploaded'); window.location='image_upload.php';</script>";
				}
			}
			function displyimage()
			{
				$con=mysqli_connect("localhost", "root", "");
				mysqli_select_db($con, "template provider");
				$qur="select * from image_file";
				$result=mysqli_query($con, $qur);
				echo '<div class="row">';
				while($row=mysqli_fetch_array($result))
				{
					echo '<div class="col-md-4">';
					echo '<div class="thumnails" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">';
					echo '<a href="data:image;base64,'.$row[2].'" data-fancybox="images" data-caption="Press esc for exit preview">';
					echo '<img src="data:image;base64,'.$row[2].' ">';		
					//echo '<a href="details.php" class="btn btnD2">Click</a>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
				}
				echo '</div>';
				mysqli_close($con);
			}
		?>
		</div></div></div></div>
		<div class="jumbotron jumbotron-fluid height100p banner" id="details">
		  <div class="container h100">
			<div class="contentBox h100 static">
				<div>
					<h1 data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="0">Business Card details</h1>
			<?php
					displydata();
					function displydata()
					{
						$con=mysqli_connect("localhost", "root", "");
						mysqli_select_db($con, "template provider");
						$qur="SELECT * FROM `e_details` ORDER BY id ASC";
						$result=mysqli_query($con, $qur);
						echo '<center><table class = "tblregistration" cellspacing = "0" cellpadding = "10" border = "1" width = "500" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="1000 ">';
						echo '<tr><th>ID</th>
						<th>Company Name</th>
						<th>Tagline</th>
						<th>Address</th>
						<th>Mobile</th>
						<th>Website Name</th>
						<th>Template</th>
						<th>Post</th>
						<th>State</th>
						<th>City</th>
						<th>Select Template</th>
						<th>Email</th>
						</tr>' ;
						while($row=mysqli_fetch_array($result))
						{
							echo '<tr>';
							echo '<td>'.$row[0].'</td>';								
							echo '<td>'.$row[1].'</td>';
							echo '<td>'.$row[2].'</td>';
							echo '<td>'.$row[3].'</td>';	
							echo '<td>'.$row[4].'</td>';	
							echo '<td>'.$row[5].'</td>';
							echo '<td><img src="data:image;base64,'.$row['logo'].'" height="200" width="250" class="img-thumnail" /></td>';
							echo '<td>'.$row[7].'</td>';
							echo '<td>'.$row[8].'</td>';
							echo '<td>'.$row[9].'</td>';
							echo '<td>'.$row[10].'</td>';
							echo '<td>'.$row[11].'</td>';
							echo '</tr>';
						}
						echo '</table></center>';
						mysqli_close($con);
					}
					?>
		</div></div></div></div>
		<div class="jumbotron jumbotron-fluid height100p banner" id="details">
		  <div class="container h100">
			<div class="contentBox h100 static">
				<div>
					<h1 data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="0">Greeting Card details</h1>
			<?php
					displydata2();
					function displydata2()
					{
						$con=mysqli_connect("localhost", "root", "");
						mysqli_select_db($con, "template provider");
						$qur="SELECT * FROM `g_details` ORDER BY id ASC";
						$result=mysqli_query($con, $qur);
						echo '<center><table class = "tblregistration" cellspacing = "0" cellpadding = "10" border = "1" width = "500" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="1000 ">';
						echo '<tr><th>ID</th>
						<th>To</th>
						<th>From</th>
						<th>Wishes</th>
						<th>Select Template</th>
						<th>Email</th>
						</tr>' ;
						while($row=mysqli_fetch_array($result))
						{
							echo '<tr>';
							echo '<td>'.$row[0].'</td>';								
							echo '<td>'.$row[1].'</td>';
							echo '<td>'.$row[2].'</td>';
							echo '<td>'.$row[3].'</td>';	
							echo '<td>'.$row[4].'</td>';
							echo '<td>'.$row[5].'</td>';
							echo '</tr>';
						}
						echo '</table></center>';
						mysqli_close($con);
					}
					?>
		</div></div></div></div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
			AOS.init();
		</script>
		<script type="text/javascript">
			$(document).scroll(function(){
				$('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
			});
		</script>
</html>