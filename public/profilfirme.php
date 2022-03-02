<?php
include "header.php";
?>


<!-- GLAVNI DIO-SADRZAJ TAG-a -->
<div style="margin-bottom: 1px;">
<div class="row" style="min-height: 500px;">

<!-- IZMJENA PROFILA -->
	<div> 
			<!-- lijeva strana -->
			<div class="col-md-8 col-xs-12 col-sm-10" style="margin-top: 5px;">
				<div>
					<br>
			<!-- Kontakt podaci -->
				<?php 

					$mail1=($_SESSION['username']);


					$adresa = strip_tags(@$_POST['adresaFirme']);
					$gradFirme = strip_tags(@$_POST['gradFirme']);
					$postanskiBr = strip_tags(@$_POST['postanskiBr']);
					$webFirme = strip_tags(@$_POST['webFirme']);
					$kontaktmail = strip_tags(@$_POST['kontaktmail']);
					$kontaktTel = strip_tags(@$_POST['kontaktTel']);
					$kontaktFax = strip_tags(@$_POST['kontaktFax']);

					if (isset($_POST['submitAdrese'])) {

							
						if ($adresa!='') {
							$adresa_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
							$row=mysqli_fetch_assoc($adresa_query);
								$adresaFirme=$row['adresaFirme'];
							$adresa_Query = mysqli_query($link, "UPDATE firme SET adresaFirme='$adresa' WHERE emailFirme = '$mail1'");
							} 

						if ($gradFirme!='') {
								$grad_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($grad_query);
									$gradFirme1=$row['gradFirme'];
								$grad_query = mysqli_query($link, "UPDATE firme SET gradFirme='$gradFirme' WHERE emailFirme = '$mail1'");
							}
						if ($postanskiBr!='') {
								$broj_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($broj_query);
									$postanskiBr1=$row['postanskiBroj'];
								$broj_query = mysqli_query($link, "UPDATE firme SET postanskiBroj='$postanskiBr' WHERE emailFirme = '$mail1'");
							}
						if ($webFirme!='') {
								$web_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($web_query);
									$webFirme1=$row['web'];
								$web_query = mysqli_query($link, "UPDATE firme SET web='$webFirme' WHERE emailFirme = '$mail1'");
								}
											
						if ($kontaktTel!='') {
								$kontaktTel_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($kontaktTel_query);
									$kontaktTel1=$row['kontaktTel'];
								$web_query = mysqli_query($link, "UPDATE firme SET kontaktTel='$kontaktTel' WHERE emailFirme = '$mail1'");
								}
											
						if ($kontaktFax!='') {
								$kontaktFax_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($kontaktFax_query);
									$kontaktFax1=$row['kontaktFax'];
								$web_query = mysqli_query($link, "UPDATE firme SET kontaktFax='$kontaktFax' WHERE emailFirme = '$mail1'");
								}
											
						} 

				?>
				
					<div class="panel panel-info" style="margin-left: 15px; margin-bottom: 0px;">
						<div class="panel-heading">
						    <H3>Kontakt podaci</H3>
						</div>
						<div class="panel-body">
							<form method="POST" action="#">
								<div style="width: 100%;">
									<div class="form-group">
										<table style="width: 100%;">
											<tr>
												<td style="width: 300px;">
													<p>Adresa firme:</p>
												</td>
												<td>
													<input type="text" class="form-control" id="adresa" 
													placeholder="<?php 
																	$adresa_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'"); 
																		$row=mysqli_fetch_assoc($adresa_query);
																	$adresaFirme=$row['adresaFirme'];
																	if ($adresaFirme) {
																	 	echo "$adresaFirme";
																	 } else {echo "Adresa firme:"; }
																	
																	?>" 
													name="adresaFirme">
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
													<input type="text" class="form-control" id="grad" 
														placeholder="<?php 
																	$grad_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($grad_query);
																	$gradFirme1=$row['gradFirme'];
																	if ($gradFirme1) {
																	 	echo "$gradFirme1";
																	 } else {echo "Grad:"; }
																	?>" 
														name="gradFirme">
											  	</td>
											  	<td style="width: 150px;">
													<p style="padding-left: 10px;">Poštanski broj:</p>
												</td>
												<td>
													<input type="number" class="form-control" id="postanskibr" 
														placeholder="<?php 
																	$broj_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($broj_query);
																	$postanskiBr1=$row['postanskiBroj'];
																	if ($postanskiBr1) {
																	 	echo "$postanskiBr1";
																	 } else {echo "Poštanski broj:"; }
																	?>" 
														name="postanskiBr">
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
													<input type="text" class="form-control" id="webFirme" 
														placeholder=<?php 
																	$web_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($web_query);
																	$webFirme1=$row['web'];
																	if ($webFirme1) {
																	 	echo "'$webFirme1'";
																	 } else {echo "Web firme:"; }
																	?>"  

														name="webFirme">
											  	</td>
											  	<td style="width: 150px;">
													<p style="padding-left: 10px;">Kontakt email:</p>
												</td>
											  	<td>
													<input type="email" class="form-control" id="kontaktmail" 
														placeholder="<?php 
																	$kontaktMail_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($kontaktMail_query);
																	$kontaktMail1=$row['kontaktmail'];
																	if ($kontaktMail1) {
																	 	echo "$kontaktMail1";
																	 } else {echo "Vaš kontakt email:"; }
																	?>" 
														name="kontaktmail">
											  	</td>
											</tr>
										</table>
										</div>
										<div class="form-group">
											<table style="width: 100%;">
												<tr>
													<td style="width: 300px;">
														<p>Kontakt telefon:</p>
													</td>
													<td>
														<input type="text" class="form-control" id="webFirme" 
															placeholder=<?php 
																		$kontaktTel_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																			$row=mysqli_fetch_assoc($kontaktTel_query);
																		$kontaktTel1=$row['kontaktTel'];
																		if ($kontaktTel1) {
																		 	echo "'$kontaktTel1'";
																		 } else {echo "Unesite vaš kontakt telefon..."; }
																		?>"  

															name="kontaktTel">
												  	</td>
												  	<td style="width: 150px;">
														<p style="padding-left: 10px;">Fax:</p>
													</td>
												  	<td>
														<input type="text" class="form-control" id="kontaktmail" 
															placeholder="<?php 
																		$kontaktFax_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																			$row=mysqli_fetch_assoc($kontaktFax_query);
																		$kontaktFax1=$row['kontaktFax'];
																		if ($kontaktFax1) {
																		 	echo "$kontaktFax1";
																		 } else {echo "Vaš broj faxa...."; }
																		?>" 
															name="kontaktFax">
												  	</td>
												</tr>
											</table>
										</div>
										<button type="submit" class="btn btn-info" style="float: right; width: 20%; margin-top: 10px;" name="submitAdrese" value="register">Sačuvaj adresu!</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			<!-- Kontakt podaci KRAJ-->
				<br>
			<!-- Ostali podaci -->

				<?php
					$mail1=($_SESSION['username']);

					$direktor = strip_tags(@$_POST['DirFirme']);
					$kontaktOsoba = strip_tags(@$_POST['KontFirme']);
					$djelatnostiFirme = strip_tags(@$_POST['djelatnostiFirme']);
					$certifikati = strip_tags(@$_POST['certifikatiFirme']);
					$brojRadnika = strip_tags(@$_POST['brRadnikaFirme']);
					$godinaFirme = strip_tags(@$_POST['godinaFirme']);
					$ukratkoFirme = strip_tags(@$_POST['ukratkoFirme']);

					if (isset($_POST['submitPodaci'])) {
						if ($direktor!='') {
								$direktor_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($direktor_query);
									$direktorFirme=$row['direktor'];
								$adresa_Query = mysqli_query($link, "UPDATE firme SET direktor='$direktor' WHERE emailFirme = '$mail1'");
								} 
						if ($kontaktOsoba!='') {
								$kontakt_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($kontakt_query);
									$kontaktFirme=$row['kontakt'];
								$adresa_Query = mysqli_query($link, "UPDATE firme SET kontakt='$kontaktOsoba' WHERE emailFirme = '$mail1'");
								} 
						if ($djelatnostiFirme!='') {
								$djelatnosti_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($djelatnosti_query);
									$djelatnostiFirme1=$row['djelatnost'];
								$adresa_Query = mysqli_query($link, "UPDATE firme SET djelatnost='$djelatnostiFirme' WHERE emailFirme = '$mail1'");
								}
						if ($certifikati!='') {
								$certifikati_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($certifikati_query);
									$certifikatiFirme=$row['certifikati'];
								$adresa_Query = mysqli_query($link, "UPDATE firme SET certifikati='$certifikati' WHERE emailFirme = '$mail1'");
								} 
						if ($brojRadnika!='') {
								$brojRadnika_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($brojRadnika_query);
									$brojRadnika1=$row['brojUposlenika'];
								$adresa_Query = mysqli_query($link, "UPDATE firme SET brojUposlenika='$brojRadnika' WHERE emailFirme = '$mail1'");
								} 
						if ($godinaFirme!='') {
								$godFirme_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($godFirme_query);
									$godinaFirme1=$row['direktor'];
								$adresa_Query = mysqli_query($link, "UPDATE firme SET godina='$godinaFirme' WHERE emailFirme = '$mail1'");
								} 
						if ($ukratkoFirme!='') {
								$ukratko_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($ukratko_query);
									$ukratko=$row['opisFirme'];
								$adresa_Query = mysqli_query($link, "UPDATE firme SET opisFirme='$ukratkoFirme' WHERE emailFirme = '$mail1'");
								} 
					}
				?>
					<div class="panel panel-info" style="margin-left: 15px; margin-bottom: 0px;">
						<div class="panel-heading">
						    <H3>Podaci o firmi</H3>
						</div>
						<div class="panel-body">
							<form method="POST" action="#" style="margin-bottom: 80px;">
								<div class="form-group">
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>Ime i prezime direktora:</p>
											</td>
											<td>
												<input type="text" class="form-control" id="DirFirme" 
													placeholder=<?php 
																	$direktor_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($direktor_query);
																	$direktorFir=$row['direktor'];
																	if ($direktorFir) {
																	 	echo "'$direktorFir'"  ;
																	 } else {echo "Ime i prezime direktora firme:"; }
																	
																	?>"  

													name="DirFirme">
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
												<input type="text" class="form-control" id="KontFirme" 
													placeholder=<?php 
																	$kontakt_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($kontakt_query);
																	$kontaktFirme=$row['kontakt'];
																	if ($kontaktFirme) {
																	 	echo "'$kontaktFirme'"  ;
																	 } else {echo "Ime i prezime kontakt osobe:"; }
																	?>" 

													name="KontFirme">
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
												<textarea type="text" rows= "4" maxlength="500" class="form-control" id="adresa" 
													placeholder=<?php 
																	$djelatnosti_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($djelatnosti_query);
																	$djelatnostiFirme1=$row['djelatnost'];
																	if ($djelatnostiFirme1) {
																	 	echo "'$djelatnostiFirme1'"  ;
																	 } else {echo "Djelatnosti kojima se firma bavi:"; }
																	?>"  

													name="djelatnostiFirme"></textarea>
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
												<input type="text" class="form-control" id="adresa" 
													placeholder=<?php 
																	$certifikati_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($certifikati_query);
																	$certifikatiFirme=$row['certifikati'];
																	if ($certifikatiFirme) {
																	 	echo "'$certifikatiFirme'"  ;
																	 } else {echo "Certifikati i licence:"; }
																	?>"  

													name="certifikatiFirme">
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
												<input type="number" class="form-control" id="grad" 
													placeholder=<?php 
																	$brojRadnika_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($brojRadnika_query);
																	$brojRadnika1=$row['brojUposlenika'];
																	if ($brojRadnika1) {
																	 	echo "'$brojRadnika1'";
																	 }else {echo "Broj uposlenika";}
																	?>"  

													name="brRadnikaFirme">
										  	</td>
										  	<td style="width: 150px;">
												<p style="padding-left: 10px;">Godina osnivanja:</p>
											</td>
											<td>
												<input type="number" class="form-control" id="postanskibr" 
													placeholder=<?php 
																	$godFirme_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($godFirme_query);
																	$godinaFirme1=$row['direktor'];
																	if ($godinaFirme1) {
																	 	echo "'$godinaFirme1'"; 
																	}else {echo "Godina osnivanja";}
																	?>"  

													name="godinaFirme">
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
												<textarea type="text" rows= "4" maxlength="500" class="form-control" id="ukratko" 
													placeholder=<?php 
																	$ukratko_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
																		$row=mysqli_fetch_assoc($ukratko_query);
																	$ukratko=$row['opisFirme'];
																	if ($ukratko) {
																	 	echo "'$ukratko'"; 
																	}else {echo "Ukratko o firmi...";}
																	?>"   

													name="ukratkoFirme"></textarea>
										  	</td>
										</tr>
									</table>
									<button type="submit" class="btn btn-info" style="float: right; width: 20%; margin-top: 10px;" name="submitPodaci" value="register">Sačuvaj podatke!</button>
								</div>
							</form>
						</div>
					</div>		
					<br>
			<!-- ID, PDV i LOGO -->

			<?php

					$mail1=($_SESSION['username']);


					$logoInput = strip_tags(@$_POST['logoInput']);
					if (isset($_POST['submitOstali'])) {
						
							if ($logoInput!='') {
								$target="logo/".basename($_FILES['logoInput']['name']);
									$logoInput_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
									$row=mysqli_fetch_assoc($logoInput_query);
										$logoInput1=$row['logoFirme'];
									$web_query = mysqli_query($link, "UPDATE firme SET logoFirme='$logoInput' WHERE emailFirme = '$mail1'");
											  		}
											  	}
				?>
					<div class="panel panel-info" style="margin-left: 15px; margin-bottom: 0px;">
						<div class="panel-heading">
						    <H3>Ostali podaci</H3>
						</div>
						<div class="panel-body">
							<form method="POST" action="#" style="margin-bottom: 80px;"  enctype:"multipart/form-data">
								<br>
								<!-- ID i PDV brojevi -->
								<div class="form-group">
								<table>
									<tr>
									<td>
									<table style="width: 100%;">
										<tr>
											<td style="width: 300px;">
												<p>ID broj:</p>
											</td>
											<td style="width: 250px; float: left;">
												<input type="text" class="form-control" id="ID" placeholder="ID broj:" name="id">
										  	</td>
										</tr>
									</table>
									</div>
									<div class="form-group">
										
									<table style="width: 551px; float: left;">
										<tr>
											<td style="width: 300px;">
												<p>PDV broj:</p>
											</td>
											<td style="width: 250px; float: left;">
												<input type="text" class="form-control" id="PDV" placeholder="PDV broj:" name="PDV">
										  	</td>
										  	<td>
										  		
										  	</td>
										</tr>

									</table>
									</td>
									<td>
									
									<!-- LOGO FIRME -->
												

												
									</td>
									</tr>
								</table>			
								</div>
							</form>
							<button type="submit" class="btn btn-info" style="float: right; width: 20%; margin-top: 10px;" name="submitOstali" value="register">Sačuvaj podatke!</button>
						</div>
						<div>
		
						</div>
					</div>
					<br>

		<!--LOGO UBACIVANJE -->

			<div class="panel panel-info" style="margin-left: 15px; margin-bottom: 0px;">
							  <div class="panel-heading" >
							    <H3>Logo firme:</H3>
							  </div>
				<div class="panel-body">
												
					<form action="profilfirme.php" method="POST" enctype="multipart/form-data" style="float: left;">
								
									<input type="file" name="logo" id="logo" style="display: none;">
									<label for="logo">Odaberi logo</label>
									<input type="submit" value="Upload" name="sub" class="btn btn-info">

					</form>
						<?php
						error_reporting(0);
							$mail1=($_SESSION['username']);

							$sifra =md5(date("Y-m-d-H-i-s"));
							$konacnoIme = $sifra.basename(@$_FILES ['logo']['name']);
							
							if (isset($_POST['sub'])) {
								$target = "slike/logo/".$konacnoIme;

									$link = mysqli_connect("localhost", "root", "", "firme_frombih");

								$logo = @$_FILES ['logo']['name'];
								$logo_size = getimagesize($_FILES ['logo']['tmp_name']);

									if ($logo_size==FALSE) {
										echo "Uneseni file nije slika... Dozvoljeni fajlovi su: JPG, JPEG, PNG, GIF";
									}else

									{
									//ubacivanje slike
									$sql = "UPDATE firme SET logoFirme='$konacnoIme' WHERE emailFirme = '$mail1'";
									mysqli_query($link, $sql);

									//ubacivanje logo-a u folder /slike/logo...
									if (move_uploaded_file(@$_FILES['logo']['tmp_name'], $target)) {
										$msg = "Slika uspjesno snimljena...";									
									}
									else 
										$msg = "Postoji problem sa snimanjem slike, molimo pokušajte poslije...";
									
											

								}
							}
							
						$logo_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
							$row=mysqli_fetch_assoc($logo_query);
								$logoFirme=$row['logoFirme'];

								if ($konacnoIme != 0) {
								
								echo  
								'<img src="slike/logo/'.$logoFirme.'" style=" height: 100px; width: 100px; float:right;">';
								} else {						
								
								echo 
								'<img src="slike/logo/default-logo.jpg" style=" height: 100px; width: 100px; float:right;">';
								}
						?>
					</div>
				</div>
		<!--LOGO UBACIVANJE -KRAJ -->
		
					<br>
			<!-- Promjena lozinke --> 
					<?php
						$mail1=($_SESSION['username']);
						$submitPass = @$_POST['submitLozinka'];

						$staripass = strip_tags(@$_POST['lozinkastara']);
						$novipass1 = strip_tags(@$_POST['lozinkaNova1']);
						$novipass2 = strip_tags(@$_POST['lozinkaNova2']);


						if ($submitPass) {
								$lozinka_query = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail1'");
								$row=mysqli_fetch_assoc($lozinka_query);
								
								$trenutniPass=$row['lozinkaFirme1'];

								if ($staripass==$trenutniPass && $novipass2==$novipass1) {

									
								$lozinkaUpdateQuery = mysqli_query($link, "UPDATE firme SET lozinkaFirme1='$novipass1' WHERE emailFirme = '$mail1'");
								echo "$novipass1";
									} else { echo "Sranje!";}
									
								} 
					 ?>

						<div class="panel panel-info" style="margin-left: 15px; margin-bottom: 0px;">
							  <div class="panel-heading" >
							    <H3>Želite promjeniti lozinku?</H3>
							  </div>
							  <div class="panel-body">
								<form method="POST" action="#" style="background-color: white; padding: 5px;">
								<table>
								<tr>
									<td>
										
									</td>
								</tr>
								<tr>
									<td>
										<p>Trenutna lozinka:</p>
									</td>
									<td>
										<input type="password" class="form-control" id="lozinka1" placeholder="Unesite trenutnu lozinku..." name="lozinkastara" style="width: 300px;">
									</td>
								</tr>

								<tr>
									<td>
										<p>Nova lozinka:</p>
									</td>
									<td>
										  <input type="password" class="form-control" id="lozinka1" placeholder="Unesite novu lozinku..." name="lozinkaNova1" style="width: 300px;">
									</td>
									
								</tr>
									<td>
										<p>Ponovite novu lozinku:</p>
									</td>
									<td>
										<input type="password" class="form-control" id="lozinka2" placeholder="Ponovite novu lozinku..." name="lozinkaNova2" style="width: 300px;">
									</td>
										
								<tr>
									
								</tr>
											
								</table>
								<button type="submit" class="btn btn-info" style="float: right; width: 20%;" name="submitLozinka" value="register">Promjeni lozinku</button>
											<br/>
								</form>
								</div>
								</div>
			<!-- Promjena lozinke KRAJ--> 

					<br>
							<div class="alert alert-info" role="alert" style="margin-left: 15px; margin-bottom: 0px;">
								<h5><b>Sigurnost i povjerenje na prvom mjestu!</b></h5>
								<p>Što vise podataka unesete o vašem preduzeću potencijalni klijenti i partneri će imati više povjerenja prilikom početka saradnje.</p>
								<p>Unošenjem tačnih podataka o vašoj firmi smanjujete mogućnosti malverzacija i prevara na našoj stranici.</p>
								<p>U slučaju da su podaci o vašoj firmi netačni isti profil ce biti ukinut!</p>
							</div>			
						
						
			</div>
			
			<!-- desna strana -->
			
			<div class="col-md-4 col-xs-12 col-sm-6" style="margin-top: 5px;">
					<div class="container-fluid" style="height: 100%; border: 2px solid #e6e6e1; border-radius: 5px; background-color: white; min-height: 800px;">
						
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


</div>
<!-- GLAVNI DIO-KRAJ SADRZAJA TAG-a -->
</div>

<?php
include "footer.php";
?>