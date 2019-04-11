<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>welcome page</title>

	<link rel="stylesheet" type="text/css" href="welcome.css">
	<link rel="stylesheet" type="text/css" href="section2.css">
	<link rel="stylesheet" type="text/css" href="section3.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<body>
	<section id="pertama-banget">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light bg-light col-12">

					<a class="navbar-brand" href="#">
						<!-- navbar branding -->
						<img src="assets/branding.png" style="width: 60px; height: 70px;">
					</a>

					<ul class="navbar-nav mr-auto" style="float: right;">
						<li class="nav-link active">
							<a href="#pertama-banget"> Home </a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#service">Service</a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a> 
						</li>
						<div class="nav-item" style="float: right;">
							<button class="btn bg-light" id="signup-butt" style="border :none; color: rgba(0, 0, 0, 0.5)">Signup</button>
							<button class="btn btn-primary" style="background-color: #916648; text-align: center; border-color: #916648;">Login</button>
						</div>
					</ul>
				</nav>
			</div>

			<div class="row">
				<div id="carousel-foto" class="carousel slide col-9" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-foto" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-foto" data-slide-to="1"></li>
						<li data-target="#carousel-foto" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/3.jpg" class="d-block w-100 gbr">
						</div>
						<div class="carousel-item">
							<img src="assets/3.jpg" class="gbr d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="assets/3.jpg" class="d-block w-100 gbr">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-foto" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-foto" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<!-- begin of login -->
				<div class="container-fluid col-3 border mx-auto" style="padding-right: 5px !important; padding-left: 5px !important;">
					<div class="container2" style="margin-top: 45%; margin-left: 15%; border-width: 3px;">
						<h3 style="margin-left: 15%;">LOGIN</h3>
						<form method="POST">
							<div class="form-group">
								<input id="uname" class="input-uname" placeholder="USERNAME" name="uname-input" type="text" required>
							</div>

							<div class="form-group">
								<input id="pass" class="input-pass" placeholder="PASSWORD" name="pass-input" type="password" required>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary" style="background-color: #916648; margin-left: 18%;">Login</button>
							</div>
						</form>
					</div>
				</div>
				<!-- end of login --> 

			</div>
		</div>

		<!-- buat login nya -->
		<script type="text/javascript">
			$("#login-butt").click(function(){

			});

			$("#signup-butt").click(function(){

			});
		</script>
	</section>

	<section class="service" style="z-index: 2;">
		<h1>section 2</h1>
		<img src="assets/3.jpg" style="width: 100%; height: 900px;">
	</section>

	<section class="about" style="background-color: #f0f0 !important; z-index: 3">
		<h1>section 3</h1>
	</section>
</body>
</html>