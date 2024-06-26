<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style-en.css')}}">

	<title>Spotlesshair</title>
</head>

<body>
	<header id="header">
		<div class="headerTop">
			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
				<ul class="headerTopRgt">
					<li class="workTime">
						Opening Hours <br>
						Sat -Thu 01:00 PM - 10:00 PM, Fri Off
					</li>
					<li class="hdContact">
						Call us <br>
						920024730
					</li>
					<li class="hdBtn">
						<a class="btn btn-primary" href="#" role="button">Online Booking</a>
					</li>
				</ul>
			</div>
		</div>
		
		@yield('navbar')
	</header>
	
	<div id="homeSlider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#homeSlider" data-slide-to="0" class="active"></li>
			<li data-target="#homeSlider" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="sliderImg" style="background-image: url({{asset('assets/img/slider01.jpg')}})" ></div>
				<div class="carousel-caption d-flex align-items-center">
					<div>
						<h1>Lice & Nits <br><span>Elimination Device</span></h1>
						<p>At spotless hair, we use the latest end most advanced patented European devices that are approved by Saudi Food and Drug Authority (SFDA).</p>
						<a class="btn btn-primary" href="#" role="button">Read More</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="sliderImg" style="background-image: url({{asset('assets/img/slider01.jpg')}})" ></div>
				<div class="carousel-caption d-flex align-items-center">
					<div>
						<h1>Lice & Nits <br><span>Removal Comb</span></h1>
						<p>In this stage, the hair is divided into several sections according to length and density, then the process of combing each section commence</p>
						<a class="btn btn-primary" href="#" role="button">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<div class="main">
		<div class="homeAbout">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="homeAboutImg">
							<span></span><span></span><span></span>
							<img src="{{asset('assets/img/h-about1.jpg')}}">							
						</div>
					</div>
					<div class="col-md-7 d-flex align-items-center pl-50">
						<div>
							<h5>About Us</h5>
							<h2>Spotlesshair</h2>
							<p>We are the first and only lice removal center in the Middle East. Our center was established following comprehensive research for the best available state-of-the-art techniques that eliminate lice safely and effectively</p>
							<a class="btn btn-primary mt-10" href="#" role="button">About Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="homeProduct">
			<div class="container">				
				<div id="productSlider" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">								
								<div class="col-md-6 d-flex align-items-center pr-50">
									<div>
										<h5>Our Products</h5>
										<h2>Tea Tree Shampoo</h2>
										<p>
											Apply oil before using the Tea Tree comb to ease hair combing.<br>
											How to use : Apply Tea Tree Oil to the length of your hair, and leave it for 30 minutes
										</p>
										<a class="btn btn-primary mt-10" href="#" role="button">Order Now</a>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<img src="{{asset('assets/img/product01.png')}}">
								</div>
							</div>		
						</div>
						<div class="carousel-item">
							<div class="row">								
								<div class="col-md-6 d-flex align-items-center pr-50">
									<div>
										<h5>Our Products</h5>
										<h2>Tea Tree Collection</h2>
										<p>
											Includes Tea Tree shampoo, Tea Tree hair spray, Tea Tree oil and Tea Tree comb.
										</p>
										<a class="btn btn-primary mt-10" href="#" role="button">Order Now</a>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<img src="{{asset('assets/img/product02.png')}}">
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#productSlider" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#productSlider" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>		
			</div>
		</div>
	</div>
	
	<div class="packegeBlock">
		<div class="packegeItem" style="background-image: url({{asset('assets/img/package-img1.jpg')}})">
			<div class="packegeContent">
				<div class="price">115 SR</div>
				<h2>Short Hair <br>Package</h2>
				<p>One hour session</p>
			</div>
		</div>
		<div class="packegeItem" style="background-image: url({{asset('assets/img/package-img2.jpg')}})">
			<div class="packegeContent">
				<div class="price">165 SR</div>
				<h2>Medium Hair <br>Package</h2>
				<p>An hour and a half  session</p>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a class="footerLogo" href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
					<p>We are the first and only lice removal center in the Middle East. Our center was established following comprehensive research for the best available state-of-the-art techniques that eliminate lice safely and effectively</p>
					<nav class="nav socialMedia">
						<a class="nav-link" href="#"><i class="fab fa-whatsapp"></i></a>
						<a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
						<a class="nav-link" href="#"><i class="far fa-envelope"></i></a>
					</nav>
				</div>
				<div class="col">
					<ul class="nav flex-column">
						<li class="nav-item footerHeading">
							Menu
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Lice Elimination Service</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Packages & Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact Us</a>
						</li>
					</ul>				
				</div>
				<div class="col">
					<ul class="nav flex-column">
						<li class="nav-item footerHeading">
							Products
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tea Tree Oil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tea Tree Spray</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tea Tree Shampoo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tea Tree Collection</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tea Tree Comb & Tea Tree Oil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tea Tree Comb</a>
						</li>
					</ul>				
				</div>
				<div class="col">
					<ul class="nav flex-column">
						<li class="nav-item footerHeading">
							Branches
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><span>Alizdihar</span> Riyadh</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><span>As Suwaidi</span> Riyadh</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><span>Al Shamaliyah</span> Jeddah</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><span>Alrawdah</span> Dammam</a>
						</li>
					</ul>				
				</div>
			</div>
		</div>
		<div class="copyRight">
			Copyright © 2020 Spotlesshair. All Rights Reserved.
		</div>
	</footer>

	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script>
		$('#homeSlider').carousel({
			interval: 5000
		})
	</script>

</body>
</html>