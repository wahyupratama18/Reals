<!DOCTYPE html>
<html lang="en">
<head>
<title>Apply - REAls</title>
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
<style>
	.buttongeneral {
  border-radius: 4px;
  background-color: #8b0005;
  border: none;
  color: #f5f8fb;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 280px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.buttongeneral:hover{
	background-color: #f5f8fb;
  	color: #8b0005;
}

.buttongeneral span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttongeneral span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
  
}

.buttongeneral:hover span {
  padding-right: 25px;
  color: #8b0005;
}

.buttongeneral:hover span:after {
  opacity: 1;
  right: 0;
}

.kecil{
	display: none;
}

@media (max-width: 875px) {
  .besar {
    display: none;
  }
  .kecil{
	  display:inline;
  }
}

</style>
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
							<div class="home_title"><h1>How to apply</h1></div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="home">Home</a></li>
									<li>Apply</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br>
	<!-- Intro Left -->
	<div class="intro indpager">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container text-center">
						<div class="section_title"><h1>Welcome to REALS Application!
						</h1></div>
					</div>
					<div class="intro_text text-center">
						<p style="color:black;">In attempt to maximise the impacts and knowledge transfer on the “Years of Living Precariously: Maintaining Resilience Amidst a Global Pandemic in Europe and Asia”, we aim to accommodate as many audience as possible. Hence, REALS 2021 is open to applicants with the following categories:</p>
					</div>
					<div class="intro_text" style="text-align: center;"><p style="color:black;"><b style="font-size:150%;">UM Students</b><br>As the main participants of this event, UM students have the opportunity to join this programme in a complete package. Students are required to attend minimum 80% of the lecture meetings and conduct a final project related to the topic delivered throughout the lecture series. In addition to certificate of attendance, students with the best final project have the opportunity to win a scholarship grant for their project development.</p></div>
					<div class="intro_text" style="text-align: center;"><p style="color:black;"><b style="font-size:150%;">International Participants</b><br>This category applies to foreign national applicants (students and graduates) who wish to join our lecture series. The applicants have the opportunity to choose any lectures according to their interests. There is no minimum number of attendance required and no obligation to conduct a final project. The participants will also get an e-certificate after joining the lecture series.</p></div>
					<div class="intro_text" style="text-align: center;"><p style="color:black;"><b style="font-size:150%;">General Participants</b><br>This category applies to Indonesian applicants who are not registered as UM students. It includes alumni, lecturer, or students from other universities in Indonesia who wish to join our lecture series. The applicants have the opportunity to choose any lectures according to their interests. There is no minimum number of attendance required and no obligation to conduct a final project. The participants will also get an e-certificate after joining the lecture series.</p></div>
			</div>
		</div>
	</div>
	<br>
</div>

<br>
<br>
<center>
<div class="section_title"><h3>For More Information
						</h3></div>
						</center>
<br>
		<center>

<table class="besar">
	<tr>
	<td><div class="buttongeneral"><a style="color: #f5f8fb;" href="um-student "><span>UM Students</span></a></div></td>
	<td><div class="buttongeneral"><a style="color: #f5f8fb;" href="international "><span>International Participants</span></a></div></td>
	<td><div class="buttongeneral"><a style="color: #f5f8fb;" href="general "><span>General Participants</span></a></div></td>	
	</tr>
</table>

<section class="kecil">
<div class="col-lg-4"><div class="buttongeneral"><a style="color: #f5f8fb;" href="um-student "><span>UM Students</span></a></div></div>
<div class="col-lg-4"><div class="buttongeneral"><a style="color: #f5f8fb;" href="international "><span>International Participants</span></a></div></div>
<div class="col-lg-4"><div class="buttongeneral"><a style="color: #f5f8fb;" href="general "><span>General Participants</span></a></div></div>
</section>

		</center>
		<br>
		<br>

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