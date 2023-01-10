<!DOCTYPE html>
<html lang="en">
<head>
<title>Lectures - REAls</title>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="images/logoweb.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Confpro template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/profile.css">
</head>
<body>

<div class="super_container">
	
<?php include 'navbar.php'?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/sliderpage.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><h1>Lectures</h1></div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="home">Home</a></li>
									<li>lectures</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro Left -->

	<div class="intro intro_left">
		<div class="container">
			<div class="row row-eq-height">

				<?php
                $code= $_GET['variableName'];
                include 'lecturedata.php';
                if($code=='1'){
                    echo $lec1;
                }
                elseif($code=='2'){
                    echo $lec2;
                }
                elseif($code=='3'){
                    echo $lec3;
                }
                elseif($code=='4'){
                    echo $lec4;
                }
                elseif($code=='5'){
                    echo $lec5;
                }
                elseif($code=='6'){
                    echo $lec6;
                }
                elseif($code=='7'){
                    echo $lec7;
                }
                elseif($code=='8'){
                    echo $lec8;
                }
                elseif($code=='9'){
                    echo $lec9;
                }
                elseif($code=='10'){
                    echo $lec10;
                }
                elseif($code=='11'){
                    echo $lec11;
                }
                elseif($code=='12'){
                    echo $lec12;
                }
                elseif($code=='13'){
                    echo $lec13;
                }
                elseif($code=='14'){
                    echo $lec14;
                }
                elseif($code=='15'){
                    echo $lec15;
                }
                elseif($code=='16'){
                    echo $lec16;
                }
                elseif($code=='17'){
                    echo $lec17;
                }
                else{echo ' ';}
                
                ?>

			</div>
		</div>
	</div>
    



	<!-- Footer -->

	<?php include 'footer.php'; ?>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>



