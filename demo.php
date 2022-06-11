<html>
	<head>
		<title> Gallery </title>
		<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
		<style>
			body{
				margin:0;
				padding:0;
				background:#ccc;
			}
			main{
				width:80%;
				margin:0px auto;
			}
			.thumnails{
				width:30%;
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
		<main>
			<div><h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"> Image Gallery </h1><a href="image_upload.php" class="back" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Back</a></div>
			<?php
				$dir=glob('business/{*.jpg, *.png}', GLOB_BRACE);
				//print_r($dir);
				foreach($dir as $value)
				{
					?>
					<div class="thumnails" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
						<a href="<?php echo $value; ?>" data-fancybox="images" data-caption="<?php echo 'Press esc for exit preview' ?>">
							<img src="<?php echo $value; ?>" alt="<?php echo $value; ?>">
							<a href="sign-up.php" class="btn btnD2">Click</a>
						</a>
						<!--<h2> Title of image  <?php //echo $value; ?></h2>-->
					</div>
					
					<?php		
					}
			?>
		</main>
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