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
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
	href="css/font-awesome/css/font-awesome.min.css">
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
				<a class="navbar-brand" href="index.php">Survey Portal</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Take Survey</a></li>
					<li><a href="find_loc.php">Find a Location</a></li>
					<li><a href="admin/admin.php" data-toggle="modal" data-target="#adminLogin">Admin</a>
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
				<h3>Search for a Location</h3>
				<div class="row">
					<div class="col-sm-6">
					<div class="form-group input-group">
                                            <select class="form-control" id="stat-filter">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" id="filter_loc" type="button" style="margin: 0px 0 !important;"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
					</div>
					<div class="col-sm-6">
					<div class="form-group input-group">
                                            <select class="form-control" id="cat-filter">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" id="filter_cat" type="button" style="margin: 0px 0 !important;"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<!-- /.row -->
		
		<span id= "first_load"></span>
		

	</div>
	<!-- /.container -->



	<script src="js/loc.js">	</script>
</body>
<!-- Modal for login -->

</html>
