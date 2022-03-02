<?php include("header.php") ?>

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


<!-- REGISTRACIJA -->
	<div class="container-fluid" style="min-height: 80px;">
		<div class="row-fluid">
			<ul class="nav nav-tabs nav-justified nav-tabs-responsive">

				<!-- Registracija firme -->
			  <li class="active"><a href="#tab1" data-toggle="tab"> 
				  <h4> <span class="glyphicon glyphicon-plus" aria-hidden="true" style="font-size: 200%;"></span></h4>
				  <h4 class="hidden-xs" style="right: 3px; vertical-align: middle;" data-toggle="tab">Registracija firme</h4>
			  </a></li>

				<!-- Registracija posjetioca -->
			  <li><a href="#tab2" data-toggle="tab"> 
				  <h4> <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 200%;"></span></h4>
				  <h4 class="hidden-xs" style="right: 3px; vertical-align: middle;" data-toggle="tab">Registracija posjetioca</h4>
			  </a></li>

			</ul>
		</div>
	</div>
<!-- KRAJ registracije -->

<!-- GLAVNI DIO-SADRZAJ TAG-a -->
<div style="margin-bottom: 1px;">
<div class="tab-content" style="min-height: 500px;">

<!-- GLAVNI DIO I tab- Registracija pravnog lica -->
	<div class="tab-pane active" id="tab1"> 
	<?php include("registracijaFirme.php"); ?>
			<!-- lijeva strana -->
			<div class="col-md-6 col-xs-12 col-sm-8" style="height: 575px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
						<h3>Naš cilj!</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
			  		</div>
			</div>
			
			<!-- desna strana -->
			
			<div class="col-md-6 col-xs-12 col-sm-8" style="height: 575px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
					<br>

						<form method="POST" action="registracijaFirme.php">
							<h4>Podaci o pravnom licu:</h4>
							<br>
							<div class="form-group">
							  <input type="text" class="form-control" id="naziv-firme" placeholder="Naziv firme:" name="imeFirme">
							</div>
							<br>
							  	<div class="form-group">
								  <select class="form-control" id="sel1" name="oblikFirme">
								    <option selected disabled >Oblik firme:</option>
								    <option value="doo">d.o.o.</option>
								    <option value="dno/od">d.n.o./o.d.</option>
								    <option value="k.d">k.d.</option>
								    <option value="dropdown">d.d. / a.d.</option>
								  </select>
								</div>
							<br>
							<div class="form-group">
							  <input type="email" class="form-control" id="email" placeholder="email:" name="emailFirme">
							</div>
							<br>
							<div class="form-group">
							  <input type="password" class="form-control" id="lozinka1" placeholder="Lozinka:" name="lozinkaFirme1">
							</div>
							<br>
							<div class="form-group">
							  <input type="password" class="form-control" id="lozinka2" placeholder="Molimo ponovite lozinku..." name="lozinkaFirme2">
							</div>
							<hr>
							
							<button type="submit" class="btn btn-success" style="float: right;" name="submit1" value="register">Prijavi se!</button>
							<label class="checkbox-inline">Slažem se sa uslovima prijave<input type="checkbox" value="slaze-se" style="margin-left: 3px; margin-right: 3px;"></label>
						</form>
			  		</div>

			</div>
			

	</div>
<!-- KRAJ GLAVNOG DIJELA I tab- Registracija pravnog lica -->

<!-- GLAVNI DIO 2 tab- Registracija fizičkog lica -->
	<div class="tab-pane" id="tab2">
	<?php include("registracijaFizickogLica.php"); ?>
			<!-- lijeva strana -->
			<div class="col-md-6 col-xs-12 col-sm-8" style="height: 575px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
						<h3>Naš cilj!</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
			  		</div>
			</div>
			
			<!-- desna strana -->
			
			<div class="col-md-6 col-xs-12 col-sm-8" style="height: 575px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
					<br>
					<form method="POST" action="registracijaFizickogLica.php">
						<h4>Podaci o fizičkom licu:</h4>
						<br>
						<div class="form-group">
						  <input type="text" class="form-control" id="naziv-lica" placeholder="Korisničko ime:" name="imeFLica">
						</div>
						<br>
						<div class="form-group">
						  <input type="text" class="form-control" id="email" placeholder="email:" name="emailFLica">
						</div>
						<br>
						<div class="form-group">
						  <input type="password" class="form-control" id="lozinka1" placeholder="Lozinka:" name="lozinkaFLica1">
						</div>
						<br>
						<div class="form-group">
						  <input type="password" class="form-control" id="lozinka2" placeholder="Molimo ponovite lozinku..." name="lozinkaFLica2">
						</div>
						<button type="submit" class="btn btn-success" style="float: right;" name="submit2" value="register">Prijavi se!</button>
						<label class="checkbox-inline">Slažem se sa uslovima prijave<input type="checkbox" value="slaze-se" style="margin-left: 3px; margin-right: 3px;"></label>
					</form>
			  		</div>

			</div>
			

	</div>
<!-- KRAJ GLAVNOG DIJELA 2 tab- Registracija fizičkog lica -->

</div>
<!-- GLAVNI DIO-KRAJ SADRZAJA TAG-a -->
</div>
<!-- text -->

<div class="container-fluid col-md-4 col" style="width: 100%; height: 150px;text-align: center; vertical-align: center;">
					<h1 style="color:grey;"><b><p> Odlična odluka! </p></b></h1>
					<h4 style="color:grey;">Drago nam je što ste odlučili postati dio našeg tima! </h4>
</div>

<!-- kraj texta -->

<hr>

	<div style="height: 250px;"></div>

<!-- KRAJ FIRME I ARTIKLI -->


<?php include("footer.php"); ?>