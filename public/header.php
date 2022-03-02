<?php session_start();
if(isset($_SESSION['username'])) {
echo "Your session is running " . $_SESSION['username'];
}
include ("connect.php");

?>
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
	      <a class="navbar-brand" href="index.php"><img src="slike/maliLogo.png" style="width: 120px;"></a>
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
				if (isset($_SESSION['username'])) {
					
					include ("porukeBox.php");
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
	<div style="z-index: 3; position: absolute;">
		<!-- KATEGORIJE -->
			<div class="col-md-2">
			  
			</div>

		<!-- TRAZILICA -->
			<div class="col-md-8" >
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
		<div class="col-md-2">

			

		</div>
	</div>
<!-- KRAJ PRETRAZIVANJA I KATEGORIJA -->

<!-- REKLAMA - SLIDER-->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="z-index: initial; position: relative;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="height: 330px;">
    <div class="item active">
      <img src="slike/baneri/baner1.jpg" alt="..." style="width: 100%;">
      <div class="carousel-caption" style=" bottom: 140px; left: 60%; top: auto; right: auto;">
        <h2><b>Novootvoreni restoran...</b></h2>
    	<p>Najbolji ukusi na jednom mjestu...</p>
      </div>
    </div>
    <div class="item">
      <img src="slike/baneri/baner2.jpg" alt="..." style="width: 100%;">
      <div class="carousel-caption" style=" bottom: auto; left: 60%; top: 80px; right: auto;">
        <h2><b>Akcija za naše vijerne kupce!</b></h2>
    	<p>Najbolji kvalitet po najnižim cijenama...</p>
      </div>
    </div>
    <div class="item">
      <img src="slike/baneri/baner2.jpg" alt="..." style="width: 100%;">
      <div class="carousel-caption">
       <h3>Naslov</h3>
    	<p>Kratki podnaslov...</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- KRAJ REKLAME - SLIDERA-->