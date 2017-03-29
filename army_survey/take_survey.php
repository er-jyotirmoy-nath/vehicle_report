<?php
session_start ();
include_once 'admin/bdd.php';
if (! isset ( $qno )) {
	$qno = 0;
}
if(isset($_POST["first_greetings"]) && !empty($_POST["first_greetings"]) && $_POST["first_greetings"] == 'yes'){
	
	$_SESSION["first_greetings"] = "yes";
}
if ((isset ( $_SESSION ["USERNAME"] ) && ! empty ( $_SESSION ["USERNAME"] )) && isset ( $_SESSION ["SURVEY_ID"] ) && ! empty ( $_SESSION ["SURVEY_ID"] )) {
	/*
	 * echo "Hello -".$_SESSION["USERNAME"];
	 * echo "<br>Survey Id:- ".$_SESSION["SURVEY_ID"];
	 * echo "<BR>Station Id:- ".$_SESSION["STATION_ID"];
	 */
} else {
	header ( "location: index.php" );
}
if (isset ( $_POST ["savesurvey"] ) && isset ( $_POST ["question_id"] )) {
	try {
		$qno = isset ( $_POST ["question_no"] ) ? $_POST ["question_no"] : 1;
		$Question_id = $_POST ["question_id"];
		$Weight = $_POST ["weight"];
		$Marks = $_POST ["marks"];
		$Survey_id = $_POST ["surveyid"];
		$Factor = $Weight * $Marks;
		$station_id = $_POST ["stationid"];
		$category_id = $_POST ["category_id"];
		$user_name = $_POST ["userid"];
		$ins_survey = "INSERT INTO `survey_table`(`Question_id`, `Weight`, `Marks`, `Survey_id`, `Factor`, `station_id`, `category_id`, `user_name`) VALUES
			(:Question_id,:Weight,:Marks,:Survey_id,:Factor,:station_id,:category_id,:user_name)";
		$quer_survey = $bdd->prepare ( $ins_survey );
		$quer_survey->bindParam ( ":Question_id", $Question_id );
		$quer_survey->bindParam ( ":Weight", $Weight );
		$quer_survey->bindParam ( ":Marks", $Marks );
		$quer_survey->bindParam ( ":Survey_id", $Survey_id );
		$quer_survey->bindParam ( ":Factor", $Factor );
		$quer_survey->bindParam ( ":station_id", $station_id );
		$quer_survey->bindParam ( ":category_id", $category_id );
		$quer_survey->bindParam ( ":user_name", $user_name );
		$quer_survey->execute ();
		if ($quer_survey->rowCount () > 0) {
			$qno = $qno + 1;
		} else {
			exit ();
		}
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
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
				id="bs-example-navbar-collapse-1"></div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Please Answer the Following Questions</h3>
				<hr>
				<div class="row">
					<div class="col-sm-12">
					<?php 
					if( !isset($_POST["first_greetings"]) && empty($_POST["first_greetings"]) && !isset($_SESSION['first_greetings'])){
						echo '<p>
							<h3 style="color: green;">Please read the following instructions before you begin:-</h3>
							<ul>
							<li>Please read questions properly before answering.</li>
							<li>For every question  weightage score will signify the relevence of the question to the visitor. </li>
							<li>Wightage of every question ranges from 1 to 10.</li>
							<li>Marks of every question will range from 1 to 100.</li>
							</ul>
							<hr>
							<form action="" method="POST">
							<input type="hidden" name="first_greetings" value="yes">
							<input type="submit" class="btn btn-siccess" value="Start Survey">
							</form>
								</p>';
						
					}
					?>
					<?php
					
						if (isset ( $qno ) && isset($_SESSION['first_greetings'])) {
						$count_sql = "select count(*) from QUESTION_TABLE";
						$quer_count = $bdd->prepare ( $count_sql );
						$quer_count->execute ();
						$count = $quer_count->fetchColumn ();
						
						if (($qno+1) <= $count) {
							?>
					<form action="" method="post">
					<?php
							
							$sql_question = "SELECT * FROM QUESTION_TABLE LIMIT $qno,1";
							
							$query_question = $bdd->prepare ( $sql_question );
							$query_question->execute ();
							$res_question = $query_question->fetch ( PDO::FETCH_ASSOC );
							
							$question = $res_question ["question"];
							$question_id = $res_question ["Ques_id"];
							$category_d = $res_question ["Category_id"];
							
							?>
					<h1><?php echo  (isset($question))?"Q ".($qno+1).":".$question:"";?></h1>
							<input type="hidden" name="userid"
								value="<?php echo $_SESSION["USERNAME"]; ?>" /> <input
								type="hidden" name="stationid"
								value="<?php echo $_SESSION["STATION_ID"]; ?>" /> <input
								type="hidden" name="surveyid"
								value="<?php echo $_SESSION["SURVEY_ID"]; ?>" /> <input
								type="hidden" name="category_id"
								value="<?php echo (isset($category_d))?$category_d:""; ?>" /> <input
								type="hidden" name="question_id"
								value="<?php echo (isset($question_id))?$question_id:""; ?>" />
							<input type="hidden" name="question_no"
								value="<?php echo $qno;?>" /> <br>
							<label>Weightage: </label><input id="weight" name="weight"
								type="range" min="1" max="10" step="1"
								style="width: 16.66667%;">  <br>
							<label>Marks: </label><input id="marks" name="marks" type="range"
								min="1" max="100" step="10"
								style="width: 16.66667%;">  <br>
							<input type="submit" name="savesurvey" class="btn btn-success">
						</form>
					<?php
						}
						else {
							echo "<h2>Thank You for Participating in the Survey!!!</h2><br><a href=\"index.php\" class=\"btn btn-success\">Back to Home Page</a>";
							unset($_SESSION['first_greetings']);
						}
					}
					
					?>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<!-- /.row -->




	</div>
	<!-- /.container -->



	<script src="js/loc.js">	</script>
</body>
<!-- Modal for login -->

</html>
