<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Latest compiled and minifed CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- [if lt IE9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minifed JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css"/>

		<!-- Google Font 1-->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>

		<!-- Google Font 2-->
		<link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet" type='text/css'>

		<!-- Google Font 3
		<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'> -->

		<!-- Modernizr.js -->
		<script type='text/javascript' src="js/modernizr.js"></script>

		<!-- Resource jQuery -->
		<script type='text/javascript' src="js/main.js"></script>

		<title>Shihlin Lu</title>
	</head>

	<body>
		<header>
				<!-- Navigation Bar -->
			<nav id="cd-vertical-nav">
				<ul>
					<li>
						<a href="#section1" data-number="1">
							<span class="cd-dot"></span>
							<span class="cd-label">Introduction</span>
						</a>
					</li>
					<li>
						<a href="#about" data-number="2">
							<span class="cd-dot"></span>
							<span class="cd-label">About</span>
						</a>
					</li>
					<li>
						<a href="#portfolio" data-number="3">
							<span class="cd-dot"></span>
							<span class="cd-label">Portfolio</span>
						</a>
					</li>
					<li>
						<a href="#writing" data-number="4">
							<span class="cd-dot"></span>
							<span class="cd-label">Writing</span>
						</a>
					</li>
					<li>
						<a href="#contact" data-number="5" class="is-selected">
							<span class="cd-dot"></span>
							<span class="cd-label">Contact</span>
						</a>
					</li>
				</ul>
			</nav>
			<a class="cd-nav-trigger cd-img-replace">Open navigation<span></span></a>
		</header>

		<!-- Intro Section -->
		<!-- Particleground is contained here -->
		<section id="section1" class="cd-section">
			<div id="intro">
				<img id="intro-font" src="http://fontmeme.com/permalink/170607/e4b3e880c2ecac6feb5b66a94805562b.png" alt="shihlin-intro-name">
			</div>
		</section><!-- cd-section -->

		<!-- About Section -->
		<section id="about" class="cd-section">
			<div class="row">
				<div class="col-sm">
					<h1>About</h1>
					<h4>Shihlin is a software and web developer focused on sustainable solutions.</h4>
					<h4>For the past few years, Shihlin has worked in the energy efficiency and research industries to contribute to the advancement of high-performance buildings. In addition, her desire to merge her passion for sustainability with technology led her to learn full stack software development.</h4>
					<h4>Ranging from Raspberry Pi projects to robotics and to energy dashboards, Shihlin is excited to continue creating beautiful, data-driven applications.</h4>
				</div>
			</div>
		</section><!-- /.cd-section -->

		<!-- Portfolio Section -->
		<section id="portfolio" class="cd-section">
			<div class="row">
				<div class="col-sm">
					<h1>Portfolio</h1>
					<img class="img-circle" src="images/pi-mirror.JPG" alt="pi-mirror">
					<h2>Pi Mirror</h2>
					<h4>Powered by Raspberry Pi, this smart mirror is a centralized information hub for air quality data, weather, and other customizable modules.</h4>
					<h4>Launching Soon: 6/14/17</h4>
				</div>
			</div>
		</section><!-- /.cd-section -->

		<!-- Writing Section -->
		<section id="writing" class="cd-section">
			<div class="row">
				<h1>Writing</h1>
				<div class="col md 6">
					<img class="img-circle" src="images/data-center.png" alt="data-center">
					<h2>Data Center Efficiency Case Study</h2>
					<button class="btn btn-info"><a href="http://www.vibrantcy.org/blog/2016/7/19/data-center-efficiency-case-studies">Read</button></a>
				</div>
			</div>
		</section><!-- /.cd-section -->

		<!-- Contact Section -->
		<section id="contact" class="cd-section">
			<div class="row">
				<div class="col-md-offset-5 col-md-6">
					<h1>Contact</h1>
				</div>
			</div>
			<!-- BEGIN CONTACT FORM -->
			<form id="contact-form" method="POST" action="/public_html/php/mailer.php">
				<div class="form-group">
					<label for="name">Name</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user"></i>
						</div>
						<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope"></i>
						</div>
						<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil"></i>
						</div>
						<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment"></i>
						</div>
						<textarea rows="5" id="message" name="message" class="form-control" placeholder="Your Message (2000 characters max)"></textarea>
					</div>
				</div>
				<!-- Google reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6LduTSQUAAAAAK1T5Wr008EwURLbhCXxAwO3j_F9"></div>

				<button class="btn btn-default" type="reset">Reset</button>
				<button class="btn btn-info" type="submit">Submit</button>
			</form>
			<!-- END CONTACT FORM-->

			<!-- EMPTY FORM OUTPUT AREA -->
			<div class="row">
				<div class="col-md-6">
					<div id="output-area"></div>
				</div>
			</div>
		</section>

	</body>
</html>

