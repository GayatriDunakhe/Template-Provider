<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		echo "<script>alert('Please first login to continue');window.location='sign-up.php';</script>";
	}
	$id=$_SESSION['id'];
	$link=mysqli_connect('localhost','root','','template provider');
	$q="select * from users where id=$id";
	$res= mysqli_query($link, $q);
	//$row= mysqli_num_rows($res);
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title> Templates Provider </title>
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
			font-family:'Poppins', sans-serif;
		}
		header{
			position:relative;
			z-index:1000000;
		}
		p{
			font-size:1.15rem;
		}
		.navbar{
			background: transparent !important;
			transition: 0.5s;
		}
		.navbar.scrolled{
			background: #f5f5f0 !important;
			transition: 0.5s;
		}
		.banner{
			position:relative;
			top:0;
			width:100%;
			height:100vh;
			background: url("https://img.freepik.com/free-vector/abstract-paper-hexagon-white-background_51543-7.jpg?size=626&ext=jpg");
			background-size:cover;
			margin-bottom: 0;
		}
		.height100p{
			height:auto;
		}
		.h100{
			height:100vh;
		}
		.contentBox{
			position:relative;
			display:flex;
			justify-content:center;
			align-item:center;
			margin-top:5px;
			text-align:center;
			z-index:10;
		}
		.contentBox h1{
			font-weight:400;
			color:#000;
			text-transform:uppercase;
			font-size:4rem;
			//margin-bottom:50px;
		}
		.contentBox p{
			color:#fff;
		}
		.sec2{
			position:relative;
			background: url("https://images.wallpaperscraft.com/image/feathers_white_close-up_73789_1280x720.jpg") ;
			background-size:cover;
			height:100vh;
		}
		.blog{
			position:relative;
			padding:100px 0;
			background:#fff;
			//text-align:center;
		}
		.thumnails{
			width:65%;
			float:left;
			margin:20px;
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
		.static{
			overflow:auto;
		}
		.imgslider{
			background-image: url("https://images.wallpaperscraft.com/image/bridge_support_dark_147744_1280x720.jpg");
			//height: 50%;
			//background-repeat: no-repeat;
			animation:slider 20s infinite linear;
		}
		@keyframes slider{
			0%{
				background-image: url("https://images.wallpaperscraft.com/image/bridge_support_dark_147744_1280x720.jpg");
			}
			35%{
				background-image: url("https://images.wallpaperscraft.com/image/board_black_line_texture_background_wood_55220_1280x720.jpg");
			}
			75%{
				background-image: url("https://images.wallpaperscraft.com/image/pattern_optical_illusion_dots_158752_1280x720.jpg");
			}
			85%{
				background-image: url("https://images.wallpaperscraft.com/image/dark_black_and_white_abstract_black_background_76353_1280x720.jpg");
			}
			95%{
				background-image: url("https://images.wallpaperscraft.com/image/dark_surface_charred_135149_1280x720.jpg");
			}
		}
		.textbox{width:98% ; height:30px ;}
		.textarea{width:98% ; height:100px ;}
		input[type="submit"], input[type="reset"]{
			margin-bottom:28px;
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
		input[type="submit"]:focus,
		input[type="reset"]:hover,
		input[type="reset"]:focus{
			background: #ff5722;
			transition:0.2s ease;
		}
		.rq{
			color:red;
		}
		</style>
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
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					  </li>					
					  <li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					  </li>
					</ul>
					
				  </div>
			  </div>
			</nav>
		</header>
		<div class="jumbotron jumbotron-fluid height100p banner">
			<div class="container h100">
				<div class="contentBox h100">
				<div>
					<form name = "myfrm" method = "post" action = "post_add_data_g.php">
					<center>
						<?php
							if(!empty ($_GET ['msg']) && $_GET['msg'] = "success")
							{
								//include ".php";
								echo '<script>alert("Your data successfully submited");</script>';
							}
							$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
									"https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
									$_SERVER['REQUEST_URI']; 
					  
								//echo $link;
						?>
						<br><br>
						<h1 data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="0">Greeting card details</h1>
						<table class = "tblregistration" cellspacing = "0" cellpadding = "10" border = "0" width = "500" data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="1000">
						
						<tr>
						<th><span class="rq">*</span>To</th>
						<td><input type = "text" name = "to_p" class = "textbox" required /></td>
						</tr>
						
						<tr>
						<th><span class="rq">*</span>From</th>
						<td><input type = "text" name = "from_p" class = "textbox" required /></td>
						</tr>
						
						<tr>
						<th>Wishes</th>
						<td><textarea name = "wishes" class = "textarea" /></textarea>
						<input type = "hidden" name = "img" class = "textbox" value =<?php echo $link;?> /></td>
						</tr>
						
						<tr>
						<th>Email</th>
						<td><input type = "text" name = "email" class = "textbox" required /></td>
						</tr>
						
						<tr>
						<th></th>
						<td><input type = "submit" value = "submit" name = "submit"/>&nbsp;&nbsp;&nbsp;
						<input type = "reset" value = "Clear" name = "reset"/></td>
						</tr>
						
					</table>
					</center>
					</form>
				</div></div></div></div>
		
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
	</body>
</html>