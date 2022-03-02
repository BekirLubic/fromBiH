<?php session_start();
if(isset($_SESSION['username'])) {
echo "Your session is running " . $_SESSION['username'];
}
include ("connect.php");?>
<!DOCTYPE html>


<html fromBiH>

<head>
	<meta charset="utf-8">
	<title>fromBiH</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<!-- NAVBAR -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php"><img src="slike/logo.png" style="width: 80px" height="30px;"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Firme i partneri<span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Najnovije</a></li>
	        <li><a href="#">Tenderi</a></li>
	        <li><a href="#">Mapa firmi</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ostali linkovi <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Uslovi korištenja</a></li>
	            <li><a href="#">Oglašavanje</a></li>
	            <li><a href="#">Korisnička podrška</a></li>
	          </ul>
	        </li>
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	      <li>
	      	<li><a href="#">Naši ciljevi!</a></li>
	        <?php
				if(isset($_SESSION['username'])) {
					include ("profilBox.php");
				}
				else include ("prijavaBox.php");
				?>	        
	      </ul>
	    </div><!-- /.navbar-collapse -->		

	  </div><!-- /.container-fluid -->
	</nav>
<!-- KRAJ NAVBARA-->

<!-- PPRETRAZIVANJE I KATEGORIJE -->
	<div>
		<!-- KATEGORIJE -->
			<div class="col-md-4" role="group">
			  <button type="button" class="btn btn-default dropdown-toggle btn-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 100%; text-align: left; padding-left: 5px;">
			  <span class="glyphicon glyphicon-align-justify" aria-hidden="true" style="padding-left: 25px;"></span>
			    <span style="margin-left: 5px;">Kategorije</span>  
			    <span class="caret" style="margin-right: 5%;"></span>
			  </button>
			  <ul class="dropdown-menu dropdown-menu-right" style="left:1px; right: 1px; text-align: left; margin-left: 15px; margin-right: 15px;">
			    <li><a href="#">Action</a></li>
			    <li><a href="#">Another action</a></li>
			    <li><a href="#">Something else here</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="#">Separated link</a></li>
			  </ul>   
			</div>

		<!-- TRAZILICA -->
			<div class="col-md-4" >
			<div class="input-group">
	      <div class="input-group-btn">
	        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proizvodi <span class="caret"></span></button>
	        <ul class="dropdown-menu">
	          <li><a href="#">Firme</a></li>
	          <li><a href="#">Djelatnosti</a></li>
	          <li><a href="#">Lokacije</a></li>
	        </ul>
	      </div><!-- /btn-group -->
	      <input type="text" class="form-control" aria-label="..." placeholder="Traži...">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
			</div>

		<!-- OSTALO -->
		<div class="col-md-4 pull-right prijava">

			

		</div>

			<div class="col-md-4" role="group" style="margin-bottom: 5px;">
			  
			  <div class="btn-group btn-group-justified" role="group" aria-label="...">
				  <div class="btn-group" role="group">
				    <button type="button" class="btn btn-default">Left</button>
				  </div>
				  <div class="btn-group" role="group">
				    <button type="button" class="btn btn-default">Middle</button>
				  </div>
				  <div class="btn-group" role="group">
				    <button type="button" class="btn btn-default">Right</button>
				  </div>
				</div>
			</div>
	</div>
<!-- KRAJ PRETRAZIVANJA I KATEGORIJA -->

<!-- REKLAMA - SLIDER-->
	<div id="slider" class="container-fluid">
		...ovdje je predvidjen slider...
	</div>
<!-- KRAJ REKLAME - SLIDERA-->