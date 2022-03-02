<?php
include "header.php";
?>
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

<!-- UNOŠENJE I PREGLED PODATAKA O FIRMI -->
	<div class="container-fluid" style="min-height: 80px;">
		<div class="row-fluid">
			<ul class="nav nav-tabs nav-justified nav-tabs-responsive">

			  <li class="active"><a href="#tab1" data-toggle="tab"> 
				  <h4> <span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size: 200%;"></span></h4>
				  <h4 class="hidden-xs" style="right: 3px; vertical-align: middle;" data-toggle="tab">Podešavanje profila</h4>
			  </a></li>
			  <li><a href="#tab2" data-toggle="tab"> 
				  <h4> <span class="glyphicon glyphicon-tags" aria-hidden="true" style="font-size: 200%;"></span></h4>
				  <h4 class="hidden-xs" style="right: 3px; vertical-align: middle;" data-toggle="tab">Artikli</h4>
			  </a></li>
			  <li><a href="#tab3" data-toggle="tab"> 
				  <h4> <span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="font-size: 200%;"></span></h4>
				  <h4 class="hidden-xs" style="right: 3px; vertical-align: middle;" data-toggle="tab">Članci</h4>
			  </a></li>

			</ul>
		</div>
	</div>

<!-- GLAVNI DIO-SADRZAJ TAG-a -->
<div style="margin-bottom: 1px;">
<div class="tab-content" style="min-height: 500px;">

<!-- IZMJENA PROFILA -->
	<div class="tab-pane active" id="tab1" > 
			<!-- lijeva strana -->
			<div class="col-md-8 col-xs-12 col-sm-10" style="min-height: 800px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white; height: 100%;">
						
							<form method="POST" action="#" style="margin-bottom: 50px;">
								<br>
								<!-- ID i PDV brojevi -->
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>ID broj:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="ID" placeholder="ID broj:" name="id">
										  	</td>
										</tr>
									</table>
									</div>
									<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>PDV broj:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="PDV" placeholder="PDV broj:" name="PDV">
										  	</td>
										</tr>
									</table>
								</div>
								<hr>
								<!-- Kontakt podaci -->
								<h4>Kontakt podaci:</h4>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Adresa firme:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="adresa" placeholder="Adresa firme:" name="adresaFirme">
										  	</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Grad:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="grad" placeholder="Grad:" name="gradFirme">
										  	</td>
										  	<td style="width: 150px;">
												<p style="padding-left: 10px;">Poštanski broj:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="postanskibr" placeholder="Poštanski broj:" name="postanskiBr">
										  	</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Web stranica</p>
											</td>
											<td>
												<input type="text" class="form-control" id="webFirme" placeholder="Web stranica:" name="webFirme">
										  	</td>
										</tr>
									</table>
								</div>
								<hr>
								<!-- Ostali podaci -->
								<h4>Ostali podaci:</h4>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Ime i prezime direktora:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="imeDirFirme" placeholder="Ime:" name="imeDirFirme">
										  	</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Ime i prezime kontakt osobe:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="imeKontFirme" placeholder="Ime i prezime kontakt osobe:" name="imeKontFirme">
										  	</td>
										  	
										</tr>
									</table>
								</div>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Djelatnosti kojima se firma bavi:</p>
											</td>
											<td>
												<textarea type="text" rows= "4" maxlength="500" class="form-control" id="adresa" placeholder="Djelatnosti kojima se firma bavi:" name="djelatnostiFirme"></textarea>
										  	</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Certifikati i licence:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="adresa" placeholder="Certifikati i licence:" name="certifikatiFirme">
										  	</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Broj uposlenika:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="grad" placeholder="Broj uposlenika:" name="brRadnikaFirme">
										  	</td>
										  	<td style="width: 150px;">
												<p style="padding-left: 10px;">Godina osnivanja:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="postanskibr" placeholder="Godina osnivanja:" name="godinaFirme">
										  	</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Ukratko o nama:</p>
											</td>
											<td>
												<textarea type="text" rows= "4" maxlength="500" class="form-control" id="adresa" placeholder="Ukratko o firmi:" name="ukratkoFirme"></textarea>
										  	</td>
										</tr>
									</table>
								</div>
								<hr>
								<!-- Promjena lozinke -->
								<p>Želite promjeniti lozinku?</p>
									<div class="form-group">
									  <input type="password" class="form-control" id="lozinka1" placeholder="Lozinka:" name="lozinkaFirme1">
									</div>
									<br>
									<div class="form-group">
									  <input type="password" class="form-control" id="lozinka2" placeholder="Molimo ponovite lozinku..." name="lozinkaFirme2">
									</div>
								<hr>
								
								<a type="button" class="btn btn-info btn-md" style="width: 20%; float: right;"> Spasi izmjene! &nbsp; <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
								<br/>
							</form>
							
						<div class="alert alert-info" role="alert">
							<h5><b>Sigurnost i povjerenje na prvom mjestu!</b></h5>
							<p>Što vise podataka unesete o vašem preduzeću potencijalni klijenti i partneri će imati više povjerenja prilikom početka saradnje.</p>
							<p>Unošenjem tačnih podataka o vašoj firmi smanjujete mogućnosti malverzacija i prevara na našoj stranici.</p>
							<p>U slučaju da su podaci o vašoj firmi netačni isti profil ce biti ukinut!</p>
						</div>
					</div>
						
						
			</div>
			
			<!-- desna strana -->
			
			<div class="col-md-4 col-xs-12 col-sm-6" style="min-height: 575px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
						
						<div class="table-responsive" style="margin-top: 15px;">
							  <table class="table table-hover table-bordered">
							    <tr>
								<td>
									Naziv firme:
								</td>
								<td>
									Hamo Trade
								</td>
								</tr>
								<tr>
									<td>
										Oblik firme:
									</td>
									<td>
										doo
									</td>
								</tr>
								<tr>
									<td>
										ID broj:
									</td>
									<td>
										01234567891212
									</td>
								</tr>
								<tr>
									<td>
										PDV broj:
									</td>
									<td>
										01234567891212
									</td>
								</tr>

							  </table>
						</div>
						<p>Kontakti:</p>
						<div class="table-responsive" style="margin-top: 15px;">
							  <table class="table table-hover table-bordered">
							    <tr>
									<td>
										Adresa:
									</td>
									<td>
										Erika brandisa br.16
									</td>
								</tr>
								<tr>
									<td>
										Grad:
									</td>
									<td>
										Travnik
									</td>
								</tr>
								<tr>
									<td>
										Poštanski broj:
									</td>
									<td>
										72270
									</td>
								</tr>
								<tr>
									<td>
										Kontakt e-mail:
									</td>
									<td>
										firma@firma.com
									</td>
								</tr>
								<tr>
									<td>
										Web stranica:
									</td>
									<td>
										www.firma.com
									</td>
								</tr>


							  </table>
						</div>
						<p>Ostali podaci:</p>
						<div class="table-responsive" style="margin-top: 15px;">
							  <table class="table table-hover table-bordered">
							     <tr>
									<td>
										Djelatnosti kojima se bavimo:
									</td>
									<td>
										Proizvodnja, promet i prodaja namjestaja...
									</td>
								</tr>
							    <tr>
									<td>
										Certifikati i licence:
									</td>
									<td>
										HACCP, ostali....
									</td>
								</tr>
								<tr>
									<td>
										Broj uposlenika:
									</td>
									<td>
										13
									</td>
								</tr>
								<tr>
									<td>
										Godina osnivanja:
									</td>
									<td>
										2003
									</td>
								</tr>
								<tr>
									<td>
										Direktor:
									</td>
									<td>
										Niko Nikic
									</td>
								</tr>
								<tr>
									<td>
										Kontakt osoba:
									</td>
									<td>
										Bekir Lubic
									</td>
								</tr>
								<tr>
									<td>
										Ukratko o nama:
									</td>
									<td>
										Firma........
									</td>
								</tr>
								

							  </table>
						</div>


			  		</div>

			</div>
			
	</div>


<!-- DODAVANJE ARTIKALA -->
<div class="tab-pane" id="tab2" > 
			<!-- lijeva strana -->
			<div class="col-md-8 col-xs-12 col-sm-10" style="min-height: 800px; margin-top: 5px;">
				<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
				<h4>Želite objaviti novi artikal?</h4>
				<form method="POST" action="#" style="margin-bottom: 50px;">
								<br>
								<!-- ID i PDV brojevi -->
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Naziv artikla:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="nazivArtikla" placeholder="Unesite naziv artikla" name="nazivArtikla">
										  	</td>
										</tr>
									</table>
									</div>
									<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Kratki opis artikla:</p>
											</td>
											<td>
												<input type="text" class="form-control" placeholder="Unesite kratki opis artikla" name="kratkiOpisArtikla">
										  	</td>
										</tr>
									</table>
								</div>
								<hr>
								<!-- OPIS ARTIKLA -->
																
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Opis artikla:</p>
											</td>
											<td>
												<textarea type="text" rows= "4" maxlength="1800" class="form-control" id="" placeholder="Opširniji opis artikla koji će se pojaviti zainteresovanim klijentima..." name="opisArtikla"></textarea>
										  	</td>
										</tr>
									</table>
								</div>

								<div class="form-group">
									<select class="form-control" id="sel1" name="kategorijaArtikla" style="width: 49%; float: right;">
								    <option selected disabled >Kategorija artikla:</option>
								    <option value="kat1">kategorija 1</option>
								    <option value="kat2">kategorija 2</option>
								    <option value="kat3">kategorija 3</option>
								    <option value="kat4">kategorija 4</option>
								  </select>
								</div>
								<br>
								<hr>

								<div class="form-group">
								<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Mjesečna mogućnost isporuke:</p>
											</td>
											<td>
												<input type="text" class="form-control" placeholder="primjer: 1000 komada" name="maxIsporuka">
										  	</td>
										</tr>
										<tr>
											<td style="width: 300px;">
												<p>Minimalna narudžba</p>
											</td>
											<td>
												<input type="text" class="form-control" placeholder="primjer: 100 komada" name="maxIsporuka">
										  	</td>
										</tr>
										<tr>
											<td style="width: 300px;">
												<p>Fotografija artikla </p>
											</td>
											<td>
												<label> <input type="file" hidden></label>
										  	</td>
										</tr>
										<tr>
											<td style="width: 300px;">
												<p>Mogućnost isporuke</p>
											</td>
											<td>
												<label class="checkbox-inline" style="bottom: 15px;"> <input type="checkbox" value="mDostave"></label>
										  	</td>
										</tr>
								</table>
								</div>		
								
								<a type="button" class="btn btn-info btn-md" style="width: 20%; float: right;"> Objavi artikal! &nbsp; <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
								<br/>

							</form>


				</div>
			</div>
			
			<!-- desna strana -->
			
			<div class="col-md-4 col-xs-12 col-sm-6" style="min-height: 575px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
						
						<h4>Artikli:</h4>

						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/artikli/1.png" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime artikla</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/artikli/3.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime artikla</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/artikli/4.png" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime artikla</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/artikli/3.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime artikla</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/artikli/2.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime artikla</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						
						
		

			  		</div>

			</div>
			
</div>
	
<!-- ČLANCI O PROIZVODIMA I FIRMI -->
<div class="tab-pane" id="tab3" > 
			<!-- lijeva strana -->
			<div class="col-md-8 col-xs-12 col-sm-10" style="min-height: 800px; margin-top: 5px;">
				<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
				<h4>Želite objaviti vijest o vašoj firmi i uspjesima?</h4>
				<form method="POST" action="#" style="margin-bottom: 50px;">
								<br>
								<!-- ID i PDV brojevi -->
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Naziv vijesti:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="nazivVijesti" placeholder="Unesite naziv nove vijesti" name="nazivVijesti">
										  	</td>
										</tr>
									</table>
									</div>
									<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Kratki opis vijesti:</p>
											</td>
											<td>
												<input type="text" class="form-control" placeholder="Unesite kratki opis nove vijesti" name="kratkiOpisVijesti">
										  	</td>
										</tr>
									</table>
								</div>
								<hr>
								<!-- OPIS ARTIKLA -->
																
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Vijest:</p>
											</td>
											<td>
												<textarea type="text" rows= "6" maxlength="2500" class="form-control" id="" placeholder="Opširniji opis vijesti" name="opisVijesti"></textarea>
										  	</td>
										</tr>
									</table>
								</div>

								<div class="form-group">
									<select class="form-control" id="sel1" name="kategorijaArtikla" style="width: 49%; float: right;">
								    <option selected disabled >Kategorija vijesti:</option>
								    <option value="kat1">Konkursi</option>
								    <option value="kat2">Širenje asortimana</option>
								    <option value="kat3">Nova infrastruktura</option>
								    <option value="kat4">Partnerstva</option>
								  </select>
								</div>
								<br>
								<hr>

								<div class="form-group">
								<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Fotografija uz vijest </p>
											</td>
											<td>
												<label> <input type="file" hidden></label>
										  	</td>
										</tr>
										
								</table>
								</div>		
								
								<a type="button" class="btn btn-info btn-md" style="width: 20%; float: right;"> Objavi vijest! &nbsp; <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
								<br/>

							</form>


				</div>
			</div>
			
			<!-- desna strana -->
			
			<div class="col-md-4 col-xs-12 col-sm-6" style="min-height: 575px; margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white;"">
						
						<h4>Vijesti:</h4>

						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/vijesti/1.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime vijesti</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/vijesti/3.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime vijesti</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/vijesti/4.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime vijesti</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/vijesti/3.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime vijesti</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						<a href="#">
							<div class:"block" style="border: 1px solid #f2f3f7; width: 100%; float: left; margin-top: 5px; padding:5px;">
								<div style="max-width: 30%; max-height: 100%; float: left;">
							  <img src="slike/vijesti/2.jpg" style="border: 1px solid #e6e6e1; max-width: 100%;">
								</div> 
									<div style="padding: 5px; float: right; width: 69%; "><h4 style="text-align: center;"><u>Ime vijesti</u></h4><p style="text-align: center; float: left">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.</p> 
									</div>
							</div>
						</a>
						
						
		

			  		</div>

			</div>
			
</div>
<!-- KRAJ ČLANAKA O PROIZVODIMA I FIRMI -->

</div>
<!-- GLAVNI DIO-KRAJ SADRZAJA TAG-a -->
</div>