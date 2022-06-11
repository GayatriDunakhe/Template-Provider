<!doctype HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title> Templates Provider </title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
		<link rel="stylesheet" href="style.css">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<style>
		.imgslider{
			background-image: url("https://images.wallpaperscraft.com/image/bridge_support_dark_147744_1280x720.jpg");
			//height: 50%;
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
	    .swiper-container {
		  width: 100%;
		  height: 100%;
		  background: #000;
		  margin-top:50px;
		}
		.swiper-slide {
		  font-size: 18px;
		  color:#fff;
		  -webkit-box-sizing: border-box;
		  box-sizing: border-box;
		  padding: 40px 60px;
		}
		.parallax-bg {
		  position: absolute;
		  left: 0;
		  top: 0;
		  width: 130%;
		  height: 100%;
		  -webkit-background-size: cover;
		  background-size: cover;
		  background-position: center;
		}
		.swiper-slide .title {
		  color:#fff;
		  font-size: 41px;
		  font-weight: 300;
		  float:left;
		}
		.swiper-slide .subtitle {
		  font-size: 21px;
		  color:#000;
		}
		.swiper-slide .text {
		  font-size: 14px;
		  max-width: 400px;
		  line-height: 1.3;
		  color:#000;
		  float:center;
		  text-align: left;
		}
		</style>
	</head>
	<body data-spy="scroll" data-target=".nevbar" data-offset="50">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				<div class="container">
				  <a class="navbar-brand" href="index.php">TEMPRO</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
					  </li>					
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Templates
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="Home.php #business">Business Card</a>
						  <!--<a class="dropdown-item" href="Home.php #"></a>
						  <a class="dropdown-item" href="#"></a>
						  <div class="dropdown-divider"></div>-->
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Other</a>
						  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							  <a class="dropdown-item" href="Home.php #greeting">Greeting Card</a>
							  <!--<a class="dropdown-item" href="Home.php #"></a>
							  <a class="dropdown-item" href="Home.php #"></a>-->
						  </div>
						</div>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#explore">How to Design?</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link " href="#gd">Updates</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					  </li>
					</ul>
					
				  </div>
			  </div>
			</nav>
		</header>
		<div class="jumbotron jumbotron-fluid height100p banner " id="home">
		  <div class="container h100">
			<div class="contentBox h100">
				<div>
					<h1  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Templates Provider</h1>
					<p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">Welcome Friends, we know how annoying when you are looking for different types of templates like business card, greeting card etc, and for another purpose you search templates but
							sometime you don't find the template as you like and you don't have any knowlage about the editing software to use, but now you don't worry too much anymore, because we have created a website for you that you can create different cards in that website easily. Let's start to edit</p>
					<section data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
						<div class="container">
							<div class="swiper-container">
							<div class="parallax-bg imgslider"></div>
							<div class="swiper-wrapper">
							  <div class="swiper-slide" style="background-image:url(slider/11.jpg);background-repeat: no-repeat;background-position: right; background-size: 35%, 35%;">
								<div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Create Attractive Designs</div>
								<div class="subtitle" data-swiper-parallax="-200"> &nbsp </div>
								<div class="text" data-swiper-parallax="-100" >
								  <p><br><br>It takes just a few minutes to design beautiful landing pages that make people want to join your audience or buy your stuff.<br>Great design tells a story. Communication is a vital part of any business, and it’s true that a picture speaks a thousand words.
								  <br>Good creative design will help you create a strong impression, build a brand identity, convey key information, narrate your story, and build consumer trust.</p>
								</div>
							  </div>
							  <div class="swiper-slide" style="background-image:url(slider/40.jpg);background-repeat: no-repeat;background-position: right; background-size: 35%, 35%; margin:5px;">
								<div class="title" data-swiper-parallax="-300" style="margin-left:100px;">Free Templates</div>
								<div class="subtitle" data-swiper-parallax="-200"> &nbsp </div>
								<div class="text" data-swiper-parallax="-100" style="margin-left:20px;">
								  <p><br><br>Browse the best free business cared, portfolio and many more templates. Then customize your template without code. We are specialized in designing and creating elegant, clean and beautiful free templates for you.
								  Explore thousands of beautiful free templates. With TEMPRO with beautiful editor feature, you can customize your design for any occasion in just a few clicks and we also provide free editing service for you.</p>
								</div>
							  </div>
							  <!--<div class="swiper-slide" style="background-image:url(slider/3.jpg);background-repeat: no-repeat;background-position: right;background-size: 50%, 50%;">
								<div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Picking your starting point</div>
								<div class="subtitle" data-swiper-parallax="-200"> &nbsp </div>
								<div class="text" data-swiper-parallax="-100">
								  <p>Get started with any of our best-in-class templates and customize it to fit your needs, whether it's contact forms or color palettes. Making a beautiful business cards has never been faster.</p>
								</div>
							  </div>-->
							  <div class="swiper-slide" style="background-image:url(slider/22.jpg);background-repeat: no-repeat;background-position: right; background-size: 52%, 52%;">
								<div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Create Professional Look <br> With New Business Card</div>
								<div class="subtitle" data-swiper-parallax="-200"> &nbsp </div>
								<div class="text" data-swiper-parallax="-100">
								  <p>If you’re looking to grow your company and personal brand, you need professional business cards. We have 1,000s of free business card templates ready for you to customize. Our professional designers create new, fully customizable business card templates every day. You can personalize your business card’s layout, fonts, images, text, and colors, easily with our free online tools.</p>
								</div>
							  </div>
							</div>
							<!-- Add Pagination -->
							<div class="swiper-pagination swiper-pagination-white"></div>
							<!-- Add Navigation -->
							<div class="swiper-button-prev swiper-button-white"></div>
							<div class="swiper-button-next swiper-button-white"></div>
						  </div>
						</div>
					</section>
				</div>
			</div>
		  </div>
		</div>
		<section class="sec1" id="explore">
			<div class="container">
				<div class="row">
					<div class="offset-sm-2 col-sm-8">
						<div class="headerText text-center">
							<h2 data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="100">How to Design?</h2>
							<p data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0"></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="placeBox" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
							<div class="imgBx">
								<img src="https://abtemplates.com/wp-content/uploads/2015/07/Eescalate-Gallery-Blogger-Template.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>Choose any template<br><span>  which you like</span></h3>
							</div>
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="placeBox" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
							<div class="imgBx">
								<img src="https://www.photoblog.com/learn/wp-content/uploads/2019/02/snapseed-2-576x1024.png" class="img-fluid">
							</div>
							<div class="content">
								<h3>Get it edited<br><span>as you like</span></h3>
							</div>
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="placeBox" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
							<div class="imgBx">
								<img src="https://www.pandadoc.com/app/packages/templates/@covers/deed-of-trust-template-ev1-cc921c9111.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>Get your edited template<br><span> in different format</span></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="blog" id="gd">
			<div class="container">
				<div class="row">
					<div class="offset-sm-2 col-sm-8">
						<div class="headerText">
							<h2 data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="100">Our latest template</h2>
							<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"></p>
						</div>
					<div>
				<div>
				<div class="row">			
					<div class="col-sm-6">
						<div class="blogpost" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000">
							<div class="imgBx">
								<img src="https://image.freepik.com/free-vector/red-grey-modern-business-card-template_1051-704.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>New Business Card Design<br><span> Free</span></h3>
								<a href="sign-up.php" class="btn btnD2">Click</a>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="blogpost" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="1000">
							<div class="imgBx">
								<img src="https://i.pinimg.com/474x/4b/b6/35/4bb635d4c56c00f89e13c707004c7b1e.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>New Post Card Design<br><span>Free</span></h3>
								<a href="sign-up.php" class="btn btnD2">Click</a>
							</div>
						</div>
					</div>
				</div>
			<div>
		</section>
		<section class="sec2" id="about">
			<div class="container h100">
				<div class="contentBox h100">
					<div>
						<h2 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">About</h2>
						<p data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="1000">At our website, we’re passionate about graphic design and understand how essential it is for any organization to have clear, attractive, and well-designed graphic whether that means posters for a worldwide travel agency, brochures for a university conference, or flyers for a local fitness center. But we also realize that most small business owners (and their ever-busy employees) simply don’t have time to jump through all the hoops required to brainstorm, design, edit, proof, and print high-quality marketing materials. We make design easy so that you can focus on everything else that matters to your business.By keeping our business small and tightly focused, we’ve been able to build real relationships with our clients and use their feedback to continuously improve our services.</p>
						<a href="sign-up.php" class="btn btnD1" data-aos="flip-left" data-aos-duration="1000" data-aos-easing="ease-out-cubic" data-aos-delay="2000">Sign up</a>
					</div>
				<div>
			<div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!--<ul class="sci">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>-->
						<p class="cpy">&copyCopyright 2019 Templates Provider</p>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
		<script>
			var swiper = new Swiper('.swiper-container', {
			  speed: 600,
			  parallax: true,
			   autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			  },
			  pagination: {
				el: '.swiper-pagination',
				clickable: true,
			  },
			  navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
			});
		</script>
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