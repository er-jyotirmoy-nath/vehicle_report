<!DOCTYPE html>
<html lang="en">

<head>
<!-- Some usefull information about the website to google  -->
<meta charset="utf-8"><!-- Show encoded characters in human readable form(Ultra Text Formating version 8) -->
<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- Proper resolution setting of the website on different browsers on different devices including internet explorer -->
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- To set the initial resolution of the website -->


<title>117 Engineer Regiment</title>

<!-- Bootstrap Core CSS(Cascading Styling Sheet) -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" 	href="css/font-awesome/css/font-awesome.min.css">
<link href="css/main.css" rel="stylesheet">
<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Custom CSS -->
<style>
body {
	padding-top: 70px;
	/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}
</style>



</head>

<body >
<!-- Div tag is used to divide the website into different portions -->
	<!-- Navigation -->
	<!-- This is how bootstarp creates navigation bar on the top of the website 
	This is all given on the Boottrap website for instructions to create a navigation bar -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1"><!-- To show a short form of the navigation menu -->
					<span class="sr-only">Toggle navigation</span><!-- To show the three lines -->
					 <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
						
				</button>
				<a class="navbar-brand" href="index.php">117 Engineer Regiment</a><!-- to show name of the brand -->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#" data-toggle="modal" data-target="#survey_form">Register New Vehicle</a></li>
					<li><a href="find_loc.php">Find Your Vehicle</a></li>
					<li><a href="#" data-toggle="modal" data-target="#adminLogin">Admin</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>Welcome to 117 Engineer Regiment.</h1>
				<p class="lead">Do Haath Sab ke Sath</p>
				<p class="lead"></p>
				<ul class="list-unstyled">
					<li></li>
					<li></li>
				</ul>
				<hr>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-success" style="border-color: #f44336;">
					<div class="panel-heading1"></div>
					<div class="panel-body"
						style="min-height: 170px; text-align: center;">
						<i class="fa fa-car fa-3x" aria-hidden="true" 
							style="font-size: 135px; color: #f44336;"></i>
                                                        
					</div>
					<div class="panel-footer">
						<button type="button" class="btn btn-primary btn-lg btn-block"
							data-toggle="modal" data-target="#survey_form">
							<i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Register New Vehicle
						</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-success" style="border-color: #f44336;">
					<div class="panel-heading1"></div>
					<div class="panel-body"
						style="min-height: 170px; text-align: center;">
						<i class="fa fa-search-plus fa-3x" aria-hidden="true"
							style="font-size: 135px; color: #f44336;"></i>
                                                        
					</div>
					<div class="panel-footer">
					<a href="find_loc.php" class="btn btn-primary btn-lg btn-block"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Get Vehicle Details</a>
						
					</div>
				</div>
			</div>
			<div class="col-lg-4" text-center>
				<div class="panel panel-success" style="border-color: #f44336;">
					<div class="panel-heading1"></div>
					<div class="panel-body"
						style="min-height: 170px; text-align: center;">
						<i class="fa fa-user-secret fa-3x" aria-hidden="true"
							style="font-size: 135px; color: #f44336;"></i>
					</div>
					<div class="panel-footer">
						<button type="button" class="btn btn-primary btn-lg btn-block" 
							data-toggle="modal" data-target="#adminLogin"
							data-whatever="@mdo">
							<i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Admin
							Login
						</button>

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->



<?php include_once 'includes/modal1.php';?>
	<script src="js/main.js">	</script>
</body>
<!-- Modal for login -->

</html>
