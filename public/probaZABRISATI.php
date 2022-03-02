<?php
include "header.php";

?>


							<form action="probazabrisati.php" method="POST" enctype="multipart/form-data">
								
									file:
									<input type="file" name="logo"> <input type="submit" value="Upload" name="sub">
							</form>
						<?php
							
							$mail1=($_SESSION['username']);
							
							if (isset($_POST['sub'])) {
								$target = "slike/logo/".basename(@$_FILES ['logo']['name']);

									$link = mysqli_connect("localhost", "root", "", "firme_frombih");

								$logo = @$_FILES ['logo']['name'];
								$logo_size = getimagesize($_FILES ['logo']['tmp_name']);

									if ($logo_size==FALSE) {
										echo "Uneseni file nije slika... Dozvoljeni fajlovi su: JPG, JPEG, PNG, GIF";
									}else

									{
									//ubacivanje slike
									$sql = "UPDATE firme SET logoFirme='$logo' WHERE emailFirme = '$mail1'";
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
							
								
								echo '<img src="slike/logo/'.$logoFirme.'" style=" height: 100px; width: 100px;">';
								
						?>
						<div>
			</div>
		
<?php
include "footer.php";
?>