<?php include "common/header.php" ?>

<body id="page-top">

<?php include "common/nav.php" ?>

<header>
	<div class="header-content">
		<div class="header-content-inner">
			<h1 id="homeHeading">Helping Farmers Around the World</h1>
			<hr>
			<p>Creating the largest pest to crop database for you!</p>
			<a href="#about" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-bug"></i> ENTOGRONOMY <li class="fa fa-leaf"></li></a>
		</div>
	</div>
</header>

<section class="bg-primary" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">How it Works</h2>
				<hr class="light">
				<p class="text-faded lead text-left" style="line-height: 1.85;">Did you see a bug on your crop? Use an interactive map to report insect pests and track outbreaks found in your area. Promoting better pest control planning, this growing database rapidly shares <b>real-time</b> information about pest problems to you, your neighbors, your extension agents and agricultural researchers everywhere.</p>
				<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Investigate</a>
			</div>
		</div>
	</div>
</section>

<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">The Process</h2>
				<hr class="primary">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-bug text-primary sr-icons"></i>
					<h3><strong>Step 1:</strong> The Pest</h3>
					<p class="text-muted">Enter in a pest's name.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-leaf text-primary sr-icons"></i>
					<h3><strong>Step 2:</strong> The Crop</h3>
					<p class="text-muted">Then enter in the crop affected.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-camera text-primary sr-icons"></i>
					<h3><strong>Step 3:</strong> The Photo</h3>
					<p class="text-muted">Upload a photo of the pests or damage to crops.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-map-marker text-primary sr-icons"></i>
					<h3><strong>Step 4:</strong> The Location</h3>
					<p class="text-muted">Link your location to help track the pests.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<aside class="bg-dark">
	<div class="container text-center">
		<div class="call-to-action">
			<h2>Want to Help</h2>
			<a href="report" class="btn btn-default btn-xl sr-button">Report</a>
		</div>
	</div>
</aside>

<br>
<div class="container">
	<div class="row">
		<center><h1>Example Reports:</h1></center>
		<br>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src = "img/bugs-and-eggs.jpg" alt="bugs-and-eggs" style="width:300px; height:169px;" class="img-responsive">
				<div class="caption">
					<ul class="list-group">
						<li class="list-group-item">Brown Marmorated Stink Bug</li>
						<li class="list-group-item">On Pepper</li>
						<li class="list-group-item">August 19 2015, Keedysville, MD</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src = "img/stinkbug.jpg" alt="stinkbug" style="width:300px; height:169px;" class="img-responsive">
				<div class="caption">
					<ul class="list-group">
						<li class="list-group-item">Brown Stink Bug</li>
						<li class="list-group-item">On Cucumber</li>
						<li class="list-group-item">July 27 2016, Keedysville, MD</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src = "img/baby-worm.jpg" alt="baby-worm" style="width:300px; height:169px;" class="img-responsive">
				<div class="caption">
					<ul class="list-group">
						<li class="list-group-item">Imported Cabbage Worm</li>
						<li class="list-group-item">On Cucumber</li>
						<li class="list-group-item">July 25 2016, Keedysville, MD</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Take Our Survey Below to Help Us This Improve!</h2>
				<hr class="primary">
				<p><a href="https://lu-dtd.typeform.com/to/cJSwAn" class="btn btn-primary btn-xl">Survey</a></p>
				<p>Get in contact with us! (:</p>
			</div>
			<div class="col-lg-4 col-lg-offset-2 text-center">
				<i class="fa fa-book fa-3x sr-contact"></i>
				<p><a href="#contact">Join Alert List</a></p>
			</div>
			<div class="col-lg-4 text-center">
				<i class="fa fa-envelope-o fa-3x sr-contact"></i>
				<p><a href="mailto:your-email@your-domain.com">hkahl@umd.edu</a></p>
			</div>
		</div>
	</div>
</section>

<?php include "common/footer.php" ?>