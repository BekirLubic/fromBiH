<?php
$link = mysqli_connect("localhost", "root", "", "firme_frombih");

if (mysqli_connect_error()) {
	die ("Nije spojeno na bazu");
} else echo "spojeno"; 

?>
<?php

$imeFirme = strip_tags(@$_POST['imeFirme']);
$oblikFirme = strip_tags(@$_POST['oblikFirme']);
$emailFirme = strip_tags(@$_POST['emailFirme']);
$lozinkaFirme1 = strip_tags(@$_POST['lozinkaFirme1']);

if (isset($_POST['submit1'])){
$query = "INSERT INTO firme VALUES (NULL, CURRENT_TIMESTAMP,'$imeFirme', '$oblikFirme', '$emailFirme', '$lozinkaFirme1')";

	mysqli_query($link, $query);
}
?>
