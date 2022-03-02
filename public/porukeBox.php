
<li>
<?php
if (isset($_SESSION['username'])) {
	$ulogovanaFirma=$_SESSION['username'];

	$imeUlogovaneFirme = mysqli_query($link,"SELECT imeFirme FROM firme WHERE emailFirme = '$ulogovanaFirma'");
	$get = mysqli_fetch_assoc($imeUlogovaneFirme);
	$imeUlogovaneFirme = $get ['imeFirme'];}

$i=0;
$naslovPoruke = mysqli_query($link,"SELECT * FROM poruke WHERE primalac = '$imeUlogovaneFirme' && otvoreno = 'no' && brisanjePrimaoca = '0'");

while ($get1 = mysqli_fetch_assoc($naslovPoruke)){
	$naslov =$get1 ['naslov'];
	$datum =$get1 ['datum'];
	$posiljalac = $get1 ['posiljalac'];
	$poruka = $get1 ['poruka'];
	$id = $get1 ['id'];
	$otvoreno = $get1 ['otvoreno'];
    $i=$i+1;}


if ($i >= 1) {
echo '<a style="color: #4caf50;" href="poruke.php">
		
		<span class="badge" style="background-color:#4caf50; display:inline-block;" > ', $i,' </span>
		<span class="glyphicon glyphicon-envelope pull-right" aria-hidden="true" style="margin-left: 2px;; display:inline-block; margin-bottom:1px;"></span>
		</a>'; }
else  {
	echo 
 	'<a href="poruke.php">
		
		<span class="badge" style=" display:inline-block;" > 0 </span>
		<span class="glyphicon glyphicon-envelope pull-right" aria-hidden="true" style="margin-left: 2px;; display:inline-block; margin-bottom:1px;"></span>
		</a>'; 
	 } 

 		?>
</li>