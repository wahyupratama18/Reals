<!DOCTYPE html>
<html lang="en">

<head>
	<title>REAls</title>
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
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<style>
		time {
			text-align: center;
			font-size: 40px;
			margin-top: 0px;
		}

		.modalWindow {
			position: fixed;
			font-family: arial;
			font-size: 80%;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background: rgba(0, 0, 0, 0.2);
			z-index: 99999;
			opacity: 0;
			-webkit-transition: opacity 400ms ease-in;
			-moz-transition: opacity 400ms ease-in;
			transition: opacity 400ms ease-in;
			pointer-events: none;
		}

		.modalHeader h2 {
			color: #189CDA;
			border-bottom: 2px groove #efefef;
		}

		.modalWindow:target {
			opacity: 1;
			pointer-events: auto;
		}

		.modalWindow>div {
			width: 500px;
			position: relative;
			margin: 10% auto;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			background: #fff;
		}

		.modalWindow .modalHeader {
			padding: 5px 20px 0px 20px;
		}

		.modalWindow .modalContent {
			padding: 0px 20px 5px 20px;
		}

		.modalWindow .modalFooter {
			padding: 8px 20px 8px 20px;
		}

		.modalFooter {
			background: #F1F1F1;
			border-top: 1px solid #999;
			-moz-box-shadow: inset 0px 13px 12px -14px #888;
			-webkit-box-shadow: inset 0px 13px 12px -14px #888;
			box-shadow: inset 0px 13px 12px -14px #888;
		}

		.modalFooter p {
			color: #8b0005;
			text-align: right;
			margin: 0;
			padding: 5px;
		}

		.ok,
		.close,
		.cancel {
			background: #606061;
			color: #FFFFFF;
			line-height: 25px;
			text-align: center;
			text-decoration: none;
			font-weight: bold;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 1px 1px 3px #000;
			-webkit-box-shadow: 1px 1px 3px #000;
			box-shadow: 1px 1px 3px #000;
		}

		.close {
			position: absolute;
			right: 5px;
			top: 5px;
			width: 22px;
			height: 22px;
			font-size: 10px;

		}

		.ok,
		.cancel {
			width: 80px;
			float: right;
			margin-left: 20px;
		}

		.ok:hover {
			background: #189CDA;
		}

		.close:hover,
		.cancel:hover {
			background: #8b0005;
		}

		.clear {
			float: none;
			clear: both;
		}

		.indpager {
			background-image: url('images/backgr.png');
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.buttongeneral {
			border-radius: 4px;
			background-color: #8b0005;
			border: none;
			color: #f5f8fb;
			text-align: center;
			font-size: 20px;
			padding: 15px;
			width: 175px;
			transition: all 0.5s;
			cursor: pointer;
			margin: 5px;
		}

		.buttongeneral:hover {
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
	</style>

</head>

<body>
	<div id="openModal" class="modalWindow">
		<div>

			<div class="modalHeader">
				<h2>This is a sample modal window</h2>
				<a href="#close" title="Close" class="close">X</a>
			</div>

			<div class="modalContent">
				<p>This is a sample modal window that can be created using CSS3 and HTML5.</p>
				<p>Modal windows are used, among many others, to display login/register forms; advertisements; or just notifications to the user. They frequently contain critical information, that user must attend in order to return to the page.</p>
			</div>

			<div class="modalFooter">
				<a href="#cancel" title="Cancel" class="cancel">Cancel</a>
				<a href="#ok" title="Ok" class="ok">Apply</a>
				<p>Keep in mind that this is a demo</p>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<!-- Loader -->
	<div class="loader">
		<div class="loader-img"></div>
	</div>

	<div class="super_container">

		<?php include 'navbar.php' ?>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="slide">
						<div class="background_image" style="background-image:url(images/slidermerah.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<div class="home_title">
												<h1>
													<span>REAls</span>
													<span>Rethinking EurAsia</span>
													<span>Lecture Series</span>
												</h1>
											</div>
											<div class="home_info_container">
												<div class="home_info">
													<ul class="d-flex flex-row align-items-center justify-content-start">
														<li>24 September - 3 December</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="background_image" style="background-image:url(images/sliderhijau.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<div class="home_title">
												<h1>
													<span>REAls</span>
												</h1>
												<h2 style="color: white;">
													<span>Open for</span><br>
													<span>International Participants</span>
												</h2>
											</div>
											<div class="home_info_container">
												<div class="home_info">
													<ul class="d-flex flex-row align-items-center justify-content-start">
														<li style="color: #097b28;">24 September - 3 December</li>
													</ul>
												</div>
											</div>
											<div class="button button_3 home_button"><a href="international"><span>Apply Now<img src="images/arrow_2.png" alt=""></span></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="background_image" style="background-image:url(images/sliderbiru.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<div class="home_title">
												<h1>
													<span>REAls</span>
												</h1>
												<h2 style="color: white;">
													<span>Open for</span><br>
													<span>General Participants</span>
												</h2>
											</div>
											<div class="home_info_container">
												<div class="home_info">
													<ul class="d-flex flex-row align-items-center justify-content-start">
														<li style="color: #279fd4;">24 September - 3 December</li>
													</ul>
												</div>
											</div>
											<div class="button button_3 home_button"><a href="general"><span style="color: #279fd4;">Apply Now<img src="images/arrow_2.png" alt=""></span></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="background_image" style="background-image:url(images/slidermain.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<!--
											<div class="home_title">
												<h1>
													<span>REAls</span>
													<span>Rethinking EurAsia</span>
													<span>Lecture Series</span>
												</h1>
											</div>
										<div class="home_info_container">
											<div class="home_info">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li>7 Sept - 30 Oct 2020</li>
												</ul>
											</div>
										</div>
										-->
											<!--
											<div class="button button_1 home_button"><a href="#"><span>Apply Now<img src="images/arrow_2.png" alt=""></span></a></div>
										-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Home Slider Dots -->
				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
										<li class="home_slider_custom_dot active">01.</li>
										<li class="home_slider_custom_dot">02.</li>
										<li class="home_slider_custom_dot">03.</li>
										<li class="home_slider_custom_dot">04.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Timer 

	<div class="timer_section">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/timer.jpg" data-speed="0.8"></div>
		<div class="timer_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="timer_container">
						<ul class="timer d-flex flex-row align-items-center justify-content-start">
							<li class="d-flex flex-column justify-content-start align-items-center">
								<div id="day" class="timer_num">3</div>
								<div class="timer_unit">Days</div>
							</li>
							<li class="d-flex flex-column justify-content-start align-items-center">
								<div id="hour" class="timer_num">00</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-flex flex-column justify-content-start align-items-center">
								<div id="minute" class="timer_num">00</div>
								<div class="timer_unit">Minutes</div>
							</li>
							<li class="d-flex flex-column justify-content-start align-items-center">
								<div id="second" class="timer_num">00</div>
								<div class="timer_unit">Seconds</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	-->

		<!-- Intro -->
		<div class="intro indpager">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title_container text-center">
							<div class="section_title">
								<h1>Rethinking EurAsia Lecture Series
									<br>
									(REALS)
								</h1>
							</div>
						</div>
						<div class="intro_text text-center">
							<p>The Vision of Universitas Negeri Malang is to become a leading tertiary educational institution and to become an authoritative center for scientific, technological, and educational endeavors. In order to realize this vision, a series of courses for the Asian Community have been held, such as the successful One Asia Lecture Series (OALS) in 2018 and 2019...</p>
						</div>
						<center>
							<div class="buttongeneral"><a style="color: #f5f8fb;" href="about "><span>About</span></a></div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro indpager">
		<div class="container">
			<div class="row">
				<div class="col text-center" style="margin-top: -120px;">
					<iframe class="youtube" src="https://www.youtube.com/embed/5tnrWm9eY_Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<!-- Schedule 
	<div class="schedule">
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title_container text-center" style="margin-top: 40px;">
						<div class="section_subtitle"> </div>
						<div class="section_title"><h1>Schedule</h1></div>
					</div>
				</div>
			</div>

			<div class="row schedule_row">

				<div class="col-lg-6 schedule_col">
					<div class="schedule_container">
						<div class="schedule_title_bar schedule_title_bar_1 text-center"><span>11 September, 2020</span></div>
						<div class="schedule_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="schedule_image"><img src="images/speakers/bu-evi.jpg" alt=""></div>
									<div class="schedule_content">
										<div class="schedule_time">03:00 PM - 04:30 PM</div>
										<div class="schedule_title">Socially Constructing EurAsia:<br>An Introduction</div>
										<div class="schedule_info">Speaker: <a href="#">Dr. Evi Eliyanah</a><br>Universitas Negeri Malang, Indonesia</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-6 schedule_col">
					<div class="schedule_container">
						<div class="schedule_title_bar schedule_title_bar_1 text-center"><span>25 September, 2020</span></div>
						<div class="schedule_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="schedule_image"><img src="images/speakers/prof-emma.jpg" alt=""></div>
									<div class="schedule_content">
										<div class="schedule_time">03:00 PM - 04:30 PM</div>
										<div class="schedule_title">Genre Publics: popular music, <br>technologies and class in Indonesia</div>
										<div class="schedule_info">Speaker: <a href="#">Assoc. Prof. Emma Baulch</a><br>Monash University, Malaysia</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="col text-center">
				<div class="button button_2 intro_button"><a href="schedule.html"><span>Detail<img src="images/arrow.png" alt=""></span></a></div>
			</div>
		
		</div>
	</div>
	-->

	<!--List materi-->
	<div class="speakers indpager">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center" style="margin-top: 40px;">
						<div class="section_subtitle"> </div>
						<div class="section_title">
							<h1>List of Lectures</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 materi">
					<ul>
						<li><a href="lecture.php?variableName=1">Setting the scene: In the same storm but different boats</a></li>
						<li><a href="lecture.php?variableName=2">Public Health Communication about COVID-19 Response: A Discourse Analysis of the Mobility Constraints Terms in Indonesia and Malaysia.</a></li>
						<li><a href="lecture.php?variableName=3">The Cultural Political Economy of Social Sciences in Indonesia</a></li>
						<li><a href="lecture.php?variableName=4">State Capacity and Public Policy: Challenges during the global pandemic</a></li>
						<li><a href="lecture.php?variableName=5">The Urgency of post-COVID-19 equitable recovery</a></li>
						<li><a href="lecture.php?variableName=6">Language in the time of COVID-19</a></li>
						<li><a href="lecture.php?variableName=7">Setting the Scene</a></li>
						<li><a href="lecture.php?variableName=8">Social Media for Combatting Disinformation in the Time of Corona
							</a></li>
					</ul>
				</div>
				<div class="col-lg-6 materi">
					<ul>
						<li><a href="lecture.php?variableName=9">Trying Ethnography In Trying Times: A Researcher’s Reflection In Conducting Interpretive Study During Covid-19 Pandemic</a></li>
						<li><a href="lecture.php?variableName=10">SARS-CoV-2 vaccines: basic principles and development</a></li>
						<li><a href="lecture.php?variableName=11">How Japan has been Dealing with the Pandemic</a></li>
						<li><a href="lecture.php?variableName=12">The Spanish Flu Pandemic of 1918 in Colonial Indonesia: A Lesson to Learn?</a></li>
						<li><a href="lecture.php?variableName=13">Covid, Technology, and Interconnectivity: An assessment of the impact of Covid on Czech University Students and the Abui community of Alor, Indonesia</a></li>
						<li><a href="lecture.php?variableName=14">lslam and Covid-19: Muslims Responses in lndonesia and The Netherlands</a></li>
						<li><a href="lecture.php?variableName=15">Defending Against Social Engineering Attacks to Maintain Digital Resilience in the Pandemic Era</a></li>
						<li><a href="lecture.php?variableName=16">Europe and Asian Community</a></li>
					</ul>
				</div>
			</div>
			<div class="col text-center">
				<center>
					<div class="buttongeneral"><a style="color: #f5f8fb;" href="schedule "><span>Schedule</span></a></div>
				</center>
			</div>

		</div>
	</div>


	<!-- Speakers -->

	<div class="speakers indpager">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle"> </div>
						<div class="section_title">
							<h1>Speakers</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row speakers_row">

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=1"><img src="images/speakers/bu-evi.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Evi Eliyanah</div>
							<div class="speaker_title">Universitas Negeri Malang</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=3"><img src="images/speakers/inaya.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Inaya Rakhmani</div>
							<div class="speaker_title">Universitas Indonesia</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=4"><img src="images/speakers/yanuar.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Yanuar Nugroho</div>
							<div class="speaker_title">ALMI</div>
							<div class="speaker_title"></div>
						</div>
					</div>
				</div>


				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=8"><img src="images/speakers/novi.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Novi Kurnia</div>
							<div class="speaker_title">Universitas Gadjah Mada</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=2"><img src="images/speakers/zulfa.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Zulfa Sakhiyya</div>
							<div class="speaker_title">Universitas Negeri Semarang</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=7"><img src="images/speakers/mas-nabhan.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Nabhan F. Choiron. M.A.</div>
							<div class="speaker_title">Universitas Negeri Malang</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=5"><img src="images/speakers/arief.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Prof. Arief A. Yusuf</div>
							<div class="speaker_title">Universitas Padjadjaran</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=6"><img src="images/speakers/bu-renzi.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Nurenzia Yannuar</div>
							<div class="speaker_title">Universitas Negeri Malang</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>


				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=9"><img src="images/speakers/clara.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Clara Siagian</div>
							<div class="speaker_title">Australian National University</div>
							<div class="speaker_title">Australia</div>
						</div>
					</div>
				</div>


				<!-- Speaker 
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=11"><img src="images/speakers/prof.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dianni Risda</div>
							<div class="speaker_title">Universitas Pendidikan Indonesia</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>
				-->

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=10"><img src="images/speakers/astri.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Astri Kusumawardhani</div>
							<div class="speaker_title">University of Laussane</div>
							<div class="speaker_title">Switzerland</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=12"><img src="images/speakers/ravando.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Ravando Lie, M.A.</div>
							<div class="speaker_title">University of Melbourne</div>
							<div class="speaker_title">Australia</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=13"><img src="images/speakers/george.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. George Saad</div>
							<div class="speaker_title">Palacky University Olomouc</div>
							<div class="speaker_title">Czech Republic</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=14"><img src="images/speakers/syahril.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Dr. Syahril Siddik</div>
							<div class="speaker_title">Leiden University</div>
							<div class="speaker_title">Netherlands</div>
						</div>
					</div>
				</div>

				<!-- Speaker -->
				<div class="col-xl-4 col-md-6">
					<div class="speaker">
						<div class="speaker_image"><a href="profile.php?variableName=15"><img src="images/speakers/azhar.jpg" style="width: 540px;" alt=""></a></div>
						<div class="speaker_info d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_name">Azhar Ahmad Smaragdina, M.Pd.</div>
							<div class="speaker_title">Universitas Negeri Malang</div>
							<div class="speaker_title">Indonesia</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>

	<!-- CTA

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8"></div>
		<div class="cta_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<div class="cta_title text-center"><h1>Get your tickets now!</h1></div>
						<div class="cta_text text-center">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
						</div>
						<div class="button button_3 cta_button"><a href="#"><span>get tickets<img src="images/arrow.png" alt=""></span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Footer -->

	<?php include 'footer.php'; ?>

	</div>

	<div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<!-- <div class="modal-header">
		  <h3 class="modal-title" id="announcementModalLabel"><strong>UM iCamp 2020 CANCELLATION</strong></h3>
		</div> -->
				<div class="modal-body">
					<img src="images/coming.jpg" />

					<!-- <div>
			<h3>Background</h3>
			<p>
			  UM iCamp is part of the continued efforts of Universitas Negeri Malang to enhance global education. The program was initiated to provide overseas college students with hands-on opportunities to learn Indonesian language and experience the cultural and academic life in Indonesia.
			</p>
			<p>
			  This intensive program consists of classroom sessions, socio-cultural sessions, and field trips to cultural and historical venues. Through the sessions, international students will have opportunities to better understand the dynamic aspects of Indonesian society in the past, present, and future.
			</p>
		  </div> -->
				</div>
				<div class="modal-footer">
					<a href="https://www.instagram.com/oia_um/" target="_blank"><button type="button" class="btn btn-primary">More Information</button></a>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
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
	<script src="js/custom.js"></script>
	<script>
		$('#announcementModal').modal({
			show: true,
			backdrop: 'static',
			keyboard: false,
		});
	</script>
</body>

</html>