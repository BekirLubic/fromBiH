<?php 
include ("header.php");
?>

<div class="container-fluid">


<h3>Poruke:</h3>
<hr>
<div class="row" style="padding-bottom: 100px;">

<!-- lijeva strana poruka !-->
	 <div class="col-md-2 col-xs-2 col-sm-2" style="padding: 0px;">
	 	<div class="container-fluid" data-spy="scroll" style="height: auto; overflow-x: hidden; border: 1px solid #e6e6e1; background-color: white;">
			 <table class="table" style="width: 100%; padding: 0px; margin: 3px; float: left;">
			 	<tr>
			 		<th style="text-align: left;">
			 		<span class="glyphicon glyphicon-envelope" aria-hidden="true">
			 		</span>
			 		</th>
			 		<th style="text-align: left;">
			 			Poruke:
			 		</th>
			 	</tr>
			 </table>
			 <table class="table table-hover" style="width: 100%; padding: 0px; margin: 3px; float: left;">
			 	<tr>
			 		<td style="text-align: left;">
			 		<span class="glyphicon glyphicon-bell" aria-hidden="true">
			 		</span>
			 		</td>
					<td style="text-align: left;">
			 		Nove poruke 

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
								echo '<span class="badge" style=" display:inline-block; margin-bottom:3px;" > ', $i,' </span>'; }
								else  {
									echo 
								 	'<span class="badge" style=" display:inline-block; margin-bottom:3px;" > 0 </span>';} 

								 		?>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td style="text-align: left;">
			 		<span class="glyphicon glyphicon-folder-open" aria-hidden="true">
			 		</span>
					</td>
					<td style="text-align: left;">
			 		<a href="poruke-arhiva.php">Arhiva poruka  </a>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td style="text-align: left;">
			 		<span class="glyphicon glyphicon-flag" aria-hidden="true">
			 		</span>
					</td>
					<td style="text-align: left;">
			 		<a href="poruke-vazne.php">Važne poruke  </a>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td style="text-align: left;">
			 		<span class="glyphicon glyphicon-send" aria-hidden="true">
			 		</span>
					</td>
					<td style="text-align: left;">
			 		<a href="poruke-poslane.php">Poslane poruke</a>
			 		</td>
			 	</tr>
			 		<td style="text-align: left;">
				 	<span class="glyphicon glyphicon-trash" aria-hidden="true">
			 		</span>
					</td>
					<td style="text-align: left;">
				 	<a href="poruke-izbrisane.php">Izbrisane poruke</a>
			 		</td>
			 	</tr>
			 </table>
		</div>

	 </div>
	<!-- srednja strana poruka !-->
	 <div class="col-md-10 col-xs-10 col-sm-10">
	 	<div class="container-fluid" data-spy="scroll" style="height: 500px; overflow-x: hidden; border: 1px solid #e6e6e1; background-color: white; ">
<!-- NEPROČITANE PORUKE -->
	 	<table class="table table-hover">
	 	<tr><h4><b>Nepročitane poruke:</b></h4></tr>

  <tr style="color: grey; text-align: center;" align:"right">
  	<th style="text-align: center;">Pošiljalac</th>
  	<th style="text-align: center;">Naslov</th>
  	<th style="text-align: center;">Datum</th>
  	<th style="text-align: center;">Označi kao pročitano</th>
  	<th style="text-align: center;">Označi kao važno</th>
  	<th style="text-align: center;">Izbriši poruku</th>
  </tr>
	 	<?php
	 			 	
if (isset($_SESSION['username'])) {
	$ulogovanaFirma=$_SESSION['username'];

$imeUlogovaneFirme = mysqli_query($link,"SELECT imeFirme FROM firme WHERE emailFirme = '$ulogovanaFirma'");
$get = mysqli_fetch_assoc($imeUlogovaneFirme);
$imeUlogovaneFirme = $get ['imeFirme'];}


$naslovPoruke = mysqli_query($link,"SELECT * FROM poruke WHERE primalac = '$imeUlogovaneFirme' && otvoreno = 'no' && brisanjePrimaoca = '0'");

while ($get1 = mysqli_fetch_assoc($naslovPoruke)){
	$naslov =$get1 ['naslov'];
	$datum =$get1 ['datum'];
	$posiljalac = $get1 ['posiljalac'];
	$poruka = $get1 ['poruka'];
	$id = $get1 ['id'];
	$otvoreno = $get1 ['otvoreno'];

echo 
	'<tr data-toggle="modal" data-target="#myModal'.$id, '" class="success">',
	  	'<td style="text-align: center;">','<a href=', $posiljalac, '>', $posiljalac ,'</a>', '</td>',
	  	'<td style="text-align: center;">',
	  	'<a name="myModal'.$id,'">', $naslov,
	  	'</td>',
	  	'<td style="text-align: center;">', $datum, '</td>',
	  	'<td style="padding-top:5px; padding-bottom:0px; text-align: center;"><a href="?procitano=',$id,'">','<h3 style="margin:0px;">','<span class="glyphicon glyphicon-ok-sign" aria-hidden="true">','</span>','</h3>','</a> </td>',
	  	'<td style="padding-top:5px; padding-bottom:0px; text-align: center;"><a href="?vaznePoruke=',$id,'">','<h3 style="margin:0px;">','<span class="glyphicon glyphicon-flag" aria-hidden="true">','</span>','</h3>','</a> </td>'
	  	,
	  	'<td style="padding-top:10px; padding-bottom:0px; text-align: center;">', '<a name="izbrisi" id="izbrisi" href="?izbrisi=',$id,'" style="margin-bottom:0px; color:red;">','<span class="glyphicon glyphicon-trash" aria-hidden="true">','</span>','</a>','</td>',

  	'</tr>',

// izbriši poruku
'<div class="modal fade" id="potvrdaBrisanja'.$id,'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">',
  	'<div class="modal-dialog" role="document">',
	    '<div class="modal-content">',
	      	'<div class="modal-header">',
		        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">',
		        '<span aria-hidden="true">', "&times;", '</span>',
		        '</button>',
		        '<h4 class="modal-title" id="myModalLabel">', 
		        '<b>', "Da li ste sigurni da želite obrisati poruku? ", '</b>', $naslov ,'</h4>',
	      	'</div>',
		    '<div class="modal-footer">',
		        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>',
		        '<a data-toggle="modal" data-dismiss="modal", href="#poruke.php?izbrisi'.$id,'" name="izbrisi">Izbriši
					</a>',
		    '</div>',
		'</div>',
	'</div>',
'</div>',

// čitanje poruke novi prozorcic
'<div class="modal fade" id="myModal'.$id,'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">',
  	'<div class="modal-dialog" role="document">',
	    '<div class="modal-content">',
	      	'<div class="modal-header">',
		        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">',
		        '<span aria-hidden="true">', "&times;", '</span>',
		        '</button>',
		        '<h4 class="modal-title" id="myModalLabel">', 
		        '<b>', "Naslov poruke: ", '</b>', $naslov ,'</h4>',
		        '<h5>', '<b>', "Pošiljalac: ", '</b>','<a href=', $posiljalac, '>', $posiljalac ,'</a>','</h5>',
	      	'</div>',
		      '<div class="modal-body">',
			      '<h5>', '<b>', "Poruka: ", '</b>','</h5>',
			         '<div class="ckeditor">', $poruka   ,'</textarea>',
		      '</div>',
		      '<div class="modal-footer">',
		        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>',
		        '<button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal", href="#odgovori'.$id,'">Odgovori
					</button>',
		      '</div>',
		'</div>',
	'</div>',
'</div>',




// odgovori na poruku
      '<div id="odgovori'.$id,'" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">',
      	'<div class="modal-dialog" role="document">',
	    '<div class="modal-content">',
		  '<div class="modal-header">',
		    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">', '×', '</button>',
		    '<h4 class="modal-title">','Odgovor korisniku:', $posiljalac ,'</h4>',
		  '</div>',
		  '<div class="modal-body">',
		    '<p>', 'Unesite poruku:', '</p>',
		    '<textarea class="form-control" id="sadrzajPoruke" placeholder="Sadržaj poruke..." rows="6" name="poruka">','</textarea>',
		    
		  '</div>',
		  '<div class="modal-footer">',
		    '<button class="btn btn-default" data-toggle="modal" href="#stack3">','Pošalji odgovor','</button>',
		  '</div>',
		  '</div>',
		  '</div>',
    
  '</div>',
'</div>';


}

if (isset($_GET['izbrisi'])) {
		$idbrisanje = $_GET['izbrisi'];
		$potvrda = "izbrisano";
		$izbrisi = mysqli_query($link, "UPDATE poruke SET brisanjePrimaoca = '$potvrda' WHERE id='$idbrisanje'");
		

		echo "<script>window.open('poruke.php','_self') </script>";
			}
if (isset($_GET['procitano'])) {
		$idotvoreno = $_GET['procitano'];
		$potvrdaYes = "yes";
		$procitano = mysqli_query($link, "UPDATE poruke SET otvoreno = '$potvrdaYes' WHERE id='$idotvoreno'");
		

		echo "<script>window.open('poruke.php','_self') </script>";
			}

if (isset($_GET['vaznePoruke'])) {
		$idvazno = $_GET['vaznePoruke'];
		$potvrda1 = "1";
		$procitano = mysqli_query($link, "UPDATE poruke SET vaznePoruke = '$potvrda1' WHERE id='$idvazno'");
		

		echo "<script>window.open('poruke.php','_self') </script>";
			}
		?>



		
		</div>

		<!-- Button trigger modal -->

  
</table>




	 </div>

</div>

<?php 
include ("footer.php");
?>