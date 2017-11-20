<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"/>

		<link rel="stylesheet" href="documentation/css/pwpstyle.css"/>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script src="https://use.fontawesome.com/21e80d15b3.js"></script>

		<title>Build & Work</title>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light style="background-color: #2B2ACE;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link text-white" href="#">ABOUT<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="#">PORTFOLIO<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="#">CONTACT<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>

		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<img src="documentation/images/build.jpeg" rel="icon" alt="logo" class="resize"/>
					</div>
				</div>
			</div>
		</header>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<img src="documentation/images/aboutme.jpg" rel="icon" alt="logo" class="aboutmeresize"/>
						<div class="card">
							<div class="card-body text-white">
								Lorem ipsum dolor amet single-origin coffee organic lumbersexual roof party subway tile man bun fam pug cornhole squid shaman church-key you probably haven't heard of them small batch. Mlkshk semiotics next level palo santo. Venmo gentrify shaman echo park, yr tilde four dollar toast locavore fingerstache gastropub synth activated charcoal glossier bicycle rights aesthetic. Lyft franzen microdosing craft beer, cronut prism ugh artisan tofu echo park normcore cred pabst brooklyn chartreuse. Skateboard keytar direct trade, next level selvage YOLO schlitz cred etsy vinyl irony selfies copper mug poke sriracha.
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<img src="documentation/images/portfolio.jpg" rel="icon" alt="logo" class="aboutmeresize portfolioresize"/>
						<div class="slider-wrap">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="http://artfucksme.com/wp-content/uploads/2014/11/darkangel.gif" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="http://artfucksme.com/wp-content/uploads/2014/11/Paul_Apal_kin_02.gif" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<img src="documentation/images/contact.jpg" alt="logo" class="aboutmeresize portfolioresize contactresize"/>
						<div class="container">
							<form id="contact" action="" method="post">
								<h3>Contact Us!</h3>
								<fieldset>
									<input placeholder="Your name" type="text" tabindex="1" required autofocus>
								</fieldset>
								<fieldset>
									<input placeholder="Your Email Address" type="email" tabindex="2" required>
								</fieldset>
								<fieldset>
									<input placeholder="Your Phone Number" type="tel" tabindex="3" required>
								</fieldset>
								<fieldset>
									<input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
								</fieldset>
								<fieldset>
									<textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
								</fieldset>
								<fieldset>
									<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<button type="button" class="btn btn-ins text-white"><i class="fa fa-instagram left"></i> Instagram</button>
						<button type="button" class="btn btn-fb text-white"><i class="fa fa-facebook left"></i> Facebook</button>
						<button type="button" class="btn btn-li text-white"><i class="fa fa-linkedin left"></i> Linkedin</button>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>



