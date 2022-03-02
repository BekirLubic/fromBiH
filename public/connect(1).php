<?php
$link = mysqli_connect("localhost", "root", "", "firme_frombih");

if (mysqli_connect_error()) {
	die ("Nije spojeno na bazu");
} else echo "spojeno"; 

?>


<?php
if (isset($_POST['prijava']) && !empty($_POST['mail']) 
               && !empty($_POST['pass'])) {

	$mail=$_POST['mail'];
	$pass=$_POST['pass'];


	$result = mysqli_query($link, "SELECT * FROM firme WHERE emailFirme = '$mail' and lozinkaFirme1 = '$pass'");
	

	if (mysqli_num_rows($result)==1){

		$_SESSION['username'] = $mail;

		echo '<a action="logout.php" href="logout.php"><b>Odjavi se! </b></a>';

	}

	else echo '<script type="text/javascript">alert("Uneseni podaci nisu validni... Molimo da pokušate ponovo!");</script>';
              
            }
?>
