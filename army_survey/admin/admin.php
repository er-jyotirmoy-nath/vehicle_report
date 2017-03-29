<?php
require_once ('bdd.php');
ini_set("session.use_trans_sid", "0");
ini_set("session.use_only_cookies", "1");
session_start ();

if (! isset ( $_SESSION ["username"] ) && empty($_SESSION ["username"])) {
	header ( "Location: ../index.php" );
}
if (! isset ( $_GET ["page"] )) {
	$_GET ["page"] = "dash";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Army Survey Portal</title>

<!-- Bootstrap Core CSS -->
<link href="/army_survey/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
	href="css/font-awesome/css/font-awesome.min.css">
<link href="/army_survey/css/main.css" rel="stylesheet">
<!-- jQuery Version 1.11.1 -->
<script src="/army_survey/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/army_survey/js/bootstrap.min.js"></script>
<!-- Custom CSS -->
<style>
body {
	padding-top: 70px;
	/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}
</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/army_survey/">Survey Portal</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					</li>
				</ul>
				 <ul class="nav navbar-nav navbar-right">
      <li><a href="#" onclick="logout()"><span class="glyphicon glyphicon-log-in" ></span> logout<?php echo $_SESSION["username"]?></a></li>
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
				<h4>Admin Section</h4>

			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<ul class="nav nav-tabs">
					<li
						<?php echo ((isset($_GET["page"]) && ($_GET["page"] == "dash"))?"class=\"active\"":"");?>><a
						data-toggle="tab" href="#home">Dashboard</a></li>

					<li
						<?php echo ((isset($_GET["page"]) && ($_GET["page"] == "cred"))?"class=\"active\"":"");?>><a
						data-toggle="tab" href="#menu2">Credentials Management</a></li>
					<li
						<?php echo ((isset($_GET["page"]) && ($_GET["page"] == "question"))?"class=\"active\"":"");?>><a
						data-toggle="tab" href="#menu3">Add/Edit Questions</a></li>

					<li
						<?php echo ((isset($_GET["page"]) && ($_GET["page"] == "category"))?"class=\"active\"":"");?>><a
						data-toggle="tab" href="#menu5">Tools</a></li>
				</ul>

				<div class="tab-content">
					<div id="home"
						class="tab-pane fade <?php echo ((isset($_GET["page"]) && ($_GET["page"] == "dash"))?"in active":"");?>">
							<?php include_once 'admin_dash.php';?>
					</div>

					<div id="menu2"
						class="tab-pane fade <?php echo ((isset($_GET["page"]) && ($_GET["page"] == "cred"))?"in active":"");?>">
						<?php include_once 'admin_credentials.php';?>
					</div>
					<div id="menu3"
						class="tab-pane fade <?php echo ((isset($_GET["page"]) && ($_GET["page"] == "question"))?"in active":"");?>">

						<p><?php include 'question_man.php'; ?></p>
					</div>

					<div id="menu5"
						class="tab-pane fade <?php echo ((isset($_GET["page"]) && ($_GET["page"] == "category"))?"in active":"");?>">
						<p>
						
						
						<div class="row">
							<div class="col-sm-6">
							<?php include 'category.php'; ?>
							</div>
							<div class="col-sm-6">
							<?php include 'rank.php'; ?>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6">
							<?php include 'station_man.php'; ?>
							</div>
							<div class="col-sm-6"></div>
						</div>

						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /.container -->



	<?php include 'includes/modal.php';?>
	<script src="js/main.js">	</script>
</body>
<!-- Modal for login -->

</html>
