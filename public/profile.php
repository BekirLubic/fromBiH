<?php
include ("header.php");
?>
<?php
if (isset($_GET['u'])) {
	$imeF = mysqli_real_escape_string($link,$_GET['u']);
	if (ctype_alnum($imeF)) {
		$provjera = mysqli_query($link,"SELECT imeFirme FROM firme WHERE imeFirme = '$imeF'");
		$ostalipodaci = mysqli_query($link,"SELECT * FROM firme WHERE imeFirme = '$imeF'");
		if (mysqli_num_rows($provjera)===1) {
			$get = mysqli_fetch_assoc($provjera);
			$gets = mysqli_fetch_assoc($ostalipodaci);
			$imeF = $get['imeFirme'];
			$adresa = $gets['adresaFirme'];
			$oblikFirme = $gets['oblikFirme'];
			$grad = $gets ['gradFirme'];
			$pBroj = $gets ['postanskiBroj'];
			$kontaktOsoba = $gets ['kontakt'];
			$direktor = $gets ['direktor'];
			$mail = $gets ['kontaktmail'];
			$tel = $gets ['kontaktTel'];
			$fax = $gets ['kontaktFax'];
			$web = $gets ['web'];
			$opisFirme = $gets ['opisFirme'];
			$djelatnosti = $gets ['djelatnost'];
			$brojRadnika = $gets ['brojUposlenika'];
			$certifikati = $gets ['certifikati'];
			$godina = $gets ['godina'];
		}
		else {
			echo "Korisnik ne postoji";
			exit();
		}
	}
}
?>
<div style="width: 100%; height: 35px; margin-top: 5px; text-align: center;"> <h3><b>Profil firme "<?php echo strtoupper($imeF);?>" </b></h3>
</div>
<div>

<!-- ////////////////////lijeva strana -->

	<div class="col-md-10 col-xs-12 col-sm-6" style="margin: 0px;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<H4><b>Vijesti</b></H4>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<H4><b>Artikli</b></H4>
				</div>
			</div>
<!-- Kontakt BUTTON -->
<?php



if (isset($_SESSION['username'])) {
	$ulogovanaFirma=$_SESSION['username'];
$podaciUlogovaneFirme = mysqli_query($link,"SELECT * FROM firme WHERE emailFirme = '$ulogovanaFirma'");
$get1 = mysqli_fetch_assoc($podaciUlogovaneFirme);
$imeUlogovaneFirme = $get1 ['imeFirme'];

$imeFvelikaSlova = strtoupper($imeF)."U";

	

if($imeUlogovaneFirme != $imeF){

if (isset($_POST['posaljiPoruku1'])){
	// varijable za slanje poruka

	$naslov = strip_tags(@$_POST['naslovPoruke']);
	$sadrzaj = strip_tags(@$_POST['poruka']);
	$datum = date ('Y-m-d H:i:s');
	$otvoreno ="no";
	$brisanjePosiljaoc = 0;
	$brisanjePrimaoca = 0;
	$vaznePoruke = 0;
	$link = mysqli_connect("localhost", "root", "", "firme_frombih");

	$query = "INSERT INTO poruke VALUES (NULL,'$datum', '$imeUlogovaneFirme', '$imeF', '$naslov', '$sadrzaj', '$otvoreno', '$brisanjePosiljaoc', '$brisanjePrimaoca', $vaznePoruke)";

	mysqli_query($link, $query);

    echo ("Uspješno ste poslali poruku korisniku $imeF");
}
  		echo <<<HTML
  		<!-- modal za slanje poruka - pop-up! -->
	<div class="container">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1"> 
			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			<span> Pošalji poruku </span></button>
		<div class="modal" id="modal-1" >
			<div class="modal-dialog">
				<div class="modal-content" style="padding: 15px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Napišite poruku "$imeFvelikaSlova"</h4>
					</div>
					<div class="model-body">
						<form method="POST">
							<div class="form-group">
							  <input type="text" class="form-control" id="naslovPoruke" placeholder="Naslov poruke" name="naslovPoruke">
							</div>

	    					<textarea class="form-control" id="sadrzajPoruke" placeholder="Sadržaj poruke..." rows="10" name="poruka"></textarea>
							<br>
							<button type="submit" class="btn btn-success btn-xs" style="float: right;" name="posaljiPoruku1" id="posaljiPoruku1" value="register">Pošaljite poruku </button>

							<br>
						</form>
					</div>					
				</div>
				
			</div>
			
		</div>
		
	</div> 
HTML;

	} 
}

else
	echo <<<HTML
<!-- modal za slanje poruka ERROR- pop-up! -->
	<div class="container">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1"> 
			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			<span> Pošalji poruku </span></button>
		<div class="modal" id="modal-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="alert alert-danger" style="margin: 0px;">
	  					Samo registrovani korisnici mogu kotaktirati firmu! <a href="registracija.php"> Registruj se...</a>
	  					</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
		
HTML;

?>
	</div>
	</div>

	<!-- Kraj Kontakt BUTTONA -->



<!-- ////////////////////desna strana -->
	<div class="col-md-2 col-xs-12 col-sm-6" style="margin: 0px;">

	<!-- logo -->

			<div style="height: 200px;" name=logo>
				<img src="default-logo.jpg" style="height: 200px;">
			</div>						  	
			<br>
	<!-- info -->
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<H4><b>O nama</b></H4>
				</div>
				<p style="margin: 5px;"><?php echo "$opisFirme"; ?></p>
				<hr>
				<table class="table" style="font-size: 95%;">
					
					<tr>
						<td>
							Djelatnosti:
						</td>
						<td>
							<?php echo "$djelatnosti"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Broj uposlenika:
						</td>
						<td>
							<?php echo "$brojRadnika"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Certifikati:
						</td>
						<td>
							<?php echo "$certifikati"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Godina osnivanja:
						</td>
						<td>
							<?php echo "$godina"; ?>
						</td>
					</tr>
				</table>
			</div>
				
	<!-- info -->
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<H4><b>Info</b></H4>
				</div>
				<table class="table">
					<tr>
						<td>
							Naziv firme:
						</td>
						<td>
							<?php echo strtoupper($imeF); ?>
						</td>
					</tr>
					<tr>
						<td>
							Oblik firme:
						</td>
						<td>
							<?php echo "$oblikFirme"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Adresa firme:
						</td>
						<td>
							<?php echo "$adresa"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Lokacija:
						</td>
						<td>
							<?php echo "$pBroj $grad"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Direktor firme:
						</td>
						<td>
							<?php echo "$direktor"; ?>
						</td>
					</tr>
				</table>
			</div>
				
				
	<!-- kontakt informacije -->

			<div class="panel panel-default">
				<div class="panel-heading">
					<H4><b>Kontakt podaci</b></H4>
				</div>
				<table class="table">
					<tr>
						<td>
							Kontakt osoba:
						</td>
						<td>
							<?php echo "$kontaktOsoba"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Web:
						</td>
						<td>
							<?php echo "$web"; ?>
						</td>
					</tr>
					<tr>
						<td>
							E-mail:
						</td>
						<td>
							<?php echo "$mail"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Telefon:
						</td>
						<td>
							<?php echo "$tel"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Fax:
						</td>
						<td>
							<?php echo "$fax"; ?>
						</td>
					</tr>
				</table>
			</div>
	</div>
</div>

