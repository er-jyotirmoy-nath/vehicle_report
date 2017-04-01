<?php
require_once ('bdd.php');
ini_set("session.use_trans_sid", "0");
ini_set("session.use_only_cookies", "1");
session_start();

/* if (!isset($_SESSION ["username"]) && empty($_SESSION ["username"])) {
  header("Location: ../index.php");
  }
  if (!isset($_GET ["page"])) {
  $_GET ["page"] = "dash";
  } */
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>117 Engineer Regiment</title>

        <!-- Bootstrap Core CSS -->
        <link href="/Vehicle_Report/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"
              href="css/font-awesome/css/font-awesome.min.css">
        <link href="/Vehicle_Report/admin/css/main.css" rel="stylesheet">
        <!-- jQuery Version 1.11.1 -->
        <script src="/Vehicle_Report/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/Vehicle_Report/js/bootstrap.min.js"></script>
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
                    <a class="navbar-brand" href="/Vehicle_Report/">117 Engineer Regiment</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse"
                     id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" onclick="logout()"><span class="glyphicon glyphicon-log-in" ></span> logout<?php //echo $_SESSION["username"]   ?></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container-fluid">

            <h2>Admin Control</h2>
            <hr>
            <div class="row">
                <div class="col-lg-2" style="width: 12%;">
                    <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a data-toggle="pill" href="#alerts">Alerts</a></li>
                        <li><a data-toggle="pill" href="#home">Vehicle Master</a></li>
                        <li><a data-toggle="pill" href="#menu1">Maintenance</a></li>
                        <li><a data-toggle="pill" href="#menu2">Tire</a></li>
                        <li><a data-toggle="pill" href="#menu3">Tools</a></li>
                    </ul>
                </div>
                <div class="col-lg-10" style="width: 88%;">
                    <div class="tab-content">
                      <div id="alerts" class="tab-pane fade in active">
                            <div class="panel panel-success" style="border-color: #f44336;">
                                <div class="panel-heading1">
                                    <i class="fa fa-car" aria-hidden="true"></i>  Alerts
                                    
                                </div>
                                <div class="panel-body" style="min-height: 170px; text-align: left;">
                                   
                                        <?php include_once 'alerts_man.php'; ?>
                                   
                                        
                                </div>
                            </div>
                        </div>
                        <div id="home" class="tab-pane fade">
                            <div class="panel panel-success" style="border-color: #f44336;">
                                <div class="panel-heading1">
                                    <i class="fa fa-car" aria-hidden="true"></i>  Vehicle Master
                                    
                                </div>
                                <div class="panel-body" style="min-height: 170px; text-align: left;">
                                   
                                        <?php include_once 'vehicle_mas.php'; ?>
                                   
                                        
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="panel panel-success" style="border-color: #f44336;">
                                <div class="panel-heading1">
                                    <i class="fa fa-car" aria-hidden="true"></i>  Maintenance Detail

                                </div><div class="panel-body" style="min-height: 170px; text-align: left;">
                                   <?php include_once 'maintain_man.php'; ?>

                                </div>

                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="panel panel-success" style="border-color: #f44336;">
                                <div class="panel-heading1">
                                    <i class="fa fa-car" aria-hidden="true"></i>  Tire Master

                                </div><div class="panel-body" style="min-height: 170px; text-align: left;">
                                    <?php include_once 'tire_man.php'; ?>
                                        
                                </div>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="panel panel-success" style="border-color: #f44336;">
                                <div class="panel-heading1">
                                    <i class="fa fa-car" aria-hidden="true"></i>  Tools

                                </div><div class="panel-body" style="min-height: 170px; text-align: left;">
                                    <div class="row">
                                        
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!-- /.container -->



        <?php include 'includes/modal.php'; ?>
        <script src="js/main.js"></script>
    </body>
    <!-- Modal for login -->

</html>
