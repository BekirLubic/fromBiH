<?php
include ("header.php");
?>
<?php
if (isset($_GET['u'])) {
	$imeF = mysqli_real_escape_string($link,$_GET['u']);
	if (ctype_alnum($imeF)) {
		$provjera = mysqli_query($link,"SELECT imeFirme FROM firme WHERE imeFirme = '$imeF'");
		if (mysqli_num_rows($provjera)===1) {
			$get = mysqli_fetch_assoc($provjera);
			$imeF = $get['imeFirme'];
		}
		else {
			echo "Korisnik ne postoji";
			exit();
		}
	}
}
?>

<H1>Profil stranica firme: <?php echo "$imeF"; ?></H1>