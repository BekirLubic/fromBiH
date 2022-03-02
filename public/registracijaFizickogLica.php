<?php
$link = mysqli_connect("localhost", "root", "", "firme_frombih");
if (mysqli_connect_error()) {
	die ("Nije spojeno na bazu");
} else echo "spojeno"; 

?>

<?php

$imeFLica = strip_tags(@$_POST['imeFLica']);
$mailFLica = strip_tags(@$_POST['emailFLica']);
$lozinkaFLica = strip_tags(@$_POST['lozinkaFLica1']);

if (isset($_POST['submit2'])){
$query = "INSERT INTO fizickalica VALUES (NULL, CURRENT_TIMESTAMP,'$imeFLica', '$mailFLica', '$lozinkaFLica')";

	mysqli_query($link, $query);

	header("Location: index.php");
die();
}


?>

