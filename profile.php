<!DOCTYPE html>
<html lang="en">
<head>
<title>Speakers - REAls</title>
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
							<div class="home_title"><h1>Speakers</h1></div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="home">Home</a></li>
									<li><a href="speakers.html">speakers</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<br><br><br><br>
	<div class="container emp-profile">
		<form method="post">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					<div class="profile-img">
                        <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $spi1;
                }
                elseif($code=='2'){
                    echo $spi2;
                }
                elseif($code=='3'){
                    echo $spi3;
                }
                elseif($code=='4'){
                    echo $spi4;
                }
                elseif($code=='5'){
                    echo $spi5;
                }
                elseif($code=='6'){
                    echo $spi6;
                }
                elseif($code=='7'){
                    echo $spi7;
                }
                elseif($code=='8'){
                    echo $spi8;
                }
                elseif($code=='9'){
                    echo $spi9;
                }
                elseif($code=='10'){
                    echo $spi10;
                }
                elseif($code=='11'){
                    echo $spi11;
                }
                elseif($code=='12'){
                    echo $spi12;
                }
                elseif($code=='13'){
                    echo $spi13;
                }
                elseif($code=='14'){
                    echo $spi14;
                }
                elseif($code=='15'){
                    echo $spi15;
                }
                elseif($code=='16'){
                    echo $spi16;
                }
                elseif($code=='17'){
                    echo $spi17;
                }
                else{echo ' ';}
                
                ?>
                        
                        <br><br>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="profile-head">
						<h5>
                        <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $spn1;
                }
                elseif($code=='2'){
                    echo $spn2;
                }
                elseif($code=='3'){
                    echo $spn3;
                }
                elseif($code=='4'){
                    echo $spn4;
                }
                elseif($code=='5'){
                    echo $spn5;
                }
                elseif($code=='6'){
                    echo $spn6;
                }
                elseif($code=='7'){
                    echo $spn7;
                }
                elseif($code=='8'){
                    echo $spn8;
                }
                elseif($code=='9'){
                    echo $spn9;
                }
                elseif($code=='10'){
                    echo $spn10;
                }
                elseif($code=='11'){
                    echo $spn11;
                }
                elseif($code=='12'){
                    echo $spn12;
                }
                elseif($code=='13'){
                    echo $spn13;
                }
                elseif($code=='14'){
                    echo $spn14;
                }
                elseif($code=='15'){
                    echo $spn15;
                }
                elseif($code=='16'){
                    echo $spn16;
                }
                elseif($code=='17'){
                    echo $spn17;
                }
                else{echo ' ';}
                
                ?>
						</h5>
						<h6>
                        <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $spf1;
                }
                elseif($code=='2'){
                    echo $spf2;
                }
                elseif($code=='3'){
                    echo $spf3;
                }
                elseif($code=='4'){
                    echo $spf4;
                }
                elseif($code=='5'){
                    echo $spf5;
                }
                elseif($code=='6'){
                    echo $spf6;
                }
                elseif($code=='7'){
                    echo $spf7;
                }
                elseif($code=='8'){
                    echo $spf8;
                }
                elseif($code=='9'){
                    echo $spf9;
                }
                elseif($code=='10'){
                    echo $spf10;
                }
                elseif($code=='11'){
                    echo $spf11;
                }
                elseif($code=='12'){
                    echo $spf12;
                }
                elseif($code=='13'){
                    echo $spf13;
                }
                elseif($code=='14'){
                    echo $spf14;
                }
                elseif($code=='15'){
                    echo $spf15;
                }
                elseif($code=='16'){
                    echo $spf16;
                }
                elseif($code=='17'){
                    echo $spf17;
                }
                else{echo ' ';}
                
                ?>
						</h6>
						<br><br>
						<div class="row">
							<div class="col-md-6">
								<label>Specialised field:</label>
							</div>
							<div class="col-md-6">
								<p>
                                <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $spsf1;
                }
                elseif($code=='2'){
                    echo $spsf2;
                }
                elseif($code=='3'){
                    echo $spsf3;
                }
                elseif($code=='4'){
                    echo $spsf4;
                }
                elseif($code=='5'){
                    echo $spsf5;
                }
                elseif($code=='6'){
                    echo $spsf6;
                }
                elseif($code=='7'){
                    echo $spsf7;
                }
                elseif($code=='8'){
                    echo $spsf8;
                }
                elseif($code=='9'){
                    echo $spsf9;
                }
                elseif($code=='10'){
                    echo $spsf10;
                }
                elseif($code=='11'){
                    echo $spsf11;
                }
                elseif($code=='12'){
                    echo $spsf12;
                }
                elseif($code=='13'){
                    echo $spsf13;
                }
                elseif($code=='14'){
                    echo $spsf14;
                }
                elseif($code=='15'){
                    echo $spsf15;
                }
                elseif($code=='16'){
                    echo $spsf16;
                }
                elseif($code=='17'){
                    echo $spsf17;
                }
                else{echo ' ';}
                
                ?>
                                </p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Current Research Theme:</label>
							</div>
							<div class="col-md-6">
								<p>
                                <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $sprt1;
                }
                elseif($code=='2'){
                    echo $sprt2;
                }
                elseif($code=='3'){
                    echo $sprt3;
                }
                elseif($code=='4'){
                    echo $sprt4;
                }
                elseif($code=='5'){
                    echo $sprt5;
                }
                elseif($code=='6'){
                    echo $sprt6;
                }
                elseif($code=='7'){
                    echo $sprt7;
                }
                elseif($code=='8'){
                    echo $sprt8;
                }
                elseif($code=='9'){
                    echo $sprt9;
                }
                elseif($code=='10'){
                    echo $sprt10;
                }
                elseif($code=='11'){
                    echo $sprt11;
                }
                elseif($code=='12'){
                    echo $sprt12;
                }
                elseif($code=='13'){
                    echo $sprt13;
                }
                elseif($code=='14'){
                    echo $sprt14;
                }
                elseif($code=='15'){
                    echo $sprt15;
                }
                elseif($code=='16'){
                    echo $sprt16;
                }
                elseif($code=='17'){
                    echo $sprt17;
                }
                else{echo ' ';}
                
                ?>
                                </p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Last Graduated University, Year:</label>
							</div>
							<div class="col-md-6">
								<p>
                                <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $spg1;
                }
                elseif($code=='2'){
                    echo $spg2;
                }
                elseif($code=='3'){
                    echo $spg3;
                }
                elseif($code=='4'){
                    echo $spg4;
                }
                elseif($code=='5'){
                    echo $spg5;
                }
                elseif($code=='6'){
                    echo $spg6;
                }
                elseif($code=='7'){
                    echo $spg7;
                }
                elseif($code=='8'){
                    echo $spg8;
                }
                elseif($code=='9'){
                    echo $spg9;
                }
                elseif($code=='10'){
                    echo $spg10;
                }
                elseif($code=='11'){
                    echo $spg11;
                }
                elseif($code=='12'){
                    echo $spg12;
                }
                elseif($code=='13'){
                    echo $spg13;
                }
                elseif($code=='14'){
                    echo $spg14;
                }
                elseif($code=='15'){
                    echo $spg15;
                }
                elseif($code=='16'){
                    echo $spg16;
                }
                elseif($code=='17'){
                    echo $spg17;
                }
                else{echo ' ';}
                
                ?>
                                </p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Email:</label>
							</div>
							<div class="col-md-6">
								<p>
                                <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $spe1;
                }
                elseif($code=='2'){
                    echo $spe2;
                }
                elseif($code=='3'){
                    echo $spe3;
                }
                elseif($code=='4'){
                    echo $spe4;
                }
                elseif($code=='5'){
                    echo $spe5;
                }
                elseif($code=='6'){
                    echo $spe6;
                }
                elseif($code=='7'){
                    echo $spe7;
                }
                elseif($code=='8'){
                    echo $spe8;
                }
                elseif($code=='9'){
                    echo $spe9;
                }
                elseif($code=='10'){
                    echo $spe10;
                }
                elseif($code=='11'){
                    echo $spe11;
                }
                elseif($code=='12'){
                    echo $spe12;
                }
                elseif($code=='13'){
                    echo $spe13;
                }
                elseif($code=='14'){
                    echo $spe14;
                }
                elseif($code=='15'){
                    echo $spe15;
                }
                elseif($code=='16'){
                    echo $spe16;
                }
                elseif($code=='17'){
                    echo $spe17;
                }
                else{echo ' ';}
                
                ?>
                                </p>
							</div>
						</div>
					</div>
					<br>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<div class="profile-head">
						<br>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Biography</a>
							</li>
							<!--
								<li class="nav-item">
									<a class="nav-link" id="abstract-tab" data-toggle="tab" href="#abstract" role="tab" aria-controls="abstract" aria-selected="false">Abstract</a>
								</li>	
							-->
						</ul>
					</div>
					<div class="tab-content profile-tab" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<p class="black">
                            <?php
                $code= $_GET['variableName'];
                include 'speakersdata.php';
                if($code=='1'){
                    echo $spd1;
                }
                elseif($code=='2'){
                    echo $spd2;
                }
                elseif($code=='3'){
                    echo $spd3;
                }
                elseif($code=='4'){
                    echo $spd4;
                }
                elseif($code=='5'){
                    echo $spd5;
                }
                elseif($code=='6'){
                    echo $spd6;
                }
                elseif($code=='7'){
                    echo $spd7;
                }
                elseif($code=='8'){
                    echo $spd8;
                }
                elseif($code=='9'){
                    echo $spd9;
                }
                elseif($code=='10'){
                    echo $spd10;
                }
                elseif($code=='11'){
                    echo $spd11;
                }
                elseif($code=='12'){
                    echo $spd12;
                }
                elseif($code=='13'){
                    echo $spd13;
                }
                elseif($code=='14'){
                    echo $spd14;
                }
                elseif($code=='15'){
                    echo $spd15;
                }
                elseif($code=='16'){
                    echo $spd16;
                }
                elseif($code=='17'){
                    echo $spd17;
                }
                else{echo ' ';}
                
                ?>
							</p>
						</div>
					
						<!--
							<div class="tab-pane fade" id="abstract" role="tabpanel" aria-labelledby="abstract-tab">
							<center>
								<h4 style="padding: 20px; color: #8b0005;">Indonesian food in a global context</h4>
							</center>
							<p class="black">
								<b><i>abstract: </i></b> Today’s culinary cultures are the product of centuries of food globalization. Many of the roots of
								this process can be traced to the islands now known as Indonesia. The archipelago was home to a
								great number of spices and other food items that spread across the world in ancient times,
								helped by its geographic location at the crossroads of the Indian Ocean and the South China Sea.
								Java and Sumatra in particular developed remarkably global culinary cultures from early times, as
								sporadic references in local texts make clear. Yet this richness in valuable food products was also
								a burden. Spices in particular counted as highly valued luxury items among Europe’s elites. From
								early-modern times onwards, the so-called Spice Islands thus became a battling ground for
								competing European powers. Colonialism exerted far-ranging implications, including in the
								culinary domain. From the New World, several products were introduced that we now see as
								inseparable to Indonesian cuisine: chili pepper, tomatoes, maize, and others.
								The colonial period was also characterized by the forced translocation of Indonesian communities
								to other continents. Under the Dutch East India Company, “Malay” communities – as they were
								called – took shape in Cape Town (South Africa) and Sri Lanka. From the late nineteenth century, a
								Javanese diaspora emerged in Suriname. They remembered the culinary traditions of their
								ancestors, but found themselves in a completely different setting, with vastly different products
								and ingredients. Hence, new cuisines emerged, in which Indonesian dishes and flavours blended
								with those of the communities in contact. From the 1950s, several groups from the former
								Netherlands Indies emigrated or returned to the Netherlands. They familiarized local publics with
								Indonesian cooking traditions, most of which were heavily localized in the process. Their
								migration gave rise to numerous Indisch restaurants, Asian supermarkets known in Dutch under
								the Indonesian name toko, and an annual festival called pasar malam.
							</p>				
							</div>
						-->
					
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</form>           
	</div>
	<br><br><br><br>




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