<!DOCTYPE HTML>
<html lang="pl">
<head>
  <!--<meta http-equiv="Content-type" content="text/html; charset=utf-8">-->
  <meta charset="utf-8" />
  <script src="tabela_gen.js"></script>
  <meta name="description" content="Programowanie Internetowe - Projekty"/>
  <meta name="keywords" content="programowanie, internetowe" />
  <meta http-equiv= "X-UA-Compatible" content="IE=edge" />
  <title>Upload plików</title>

  <link rel="Stylesheet" href="../index.css" type="text/css">
</head>
  
<body>
<div id="kontener">
	<div class="bloknag">
		<h1 id="kontenernag" >Upload plików</h1>
	</div>
	
	<div id="bloklink">
		<div class="linkbut">
		<a class="link" href="PHP2/php2.php">Zalożenia</a><br/>
		</div>
		<div class="linkbut">
		<a class="link" href="upload1.php">Upload pliku</a><br/>
		</div>
		<div class="linkbut">
		<a class="link" href="upload3.php">Upload 3 plikow</a><br/>
		</div>
		<div class="linkbut">
		<a class="link" href="download.php">Download plikow</a><br/>
		</div>
		<div class="linkbut">
		<a class="link" href="object.php">Prezentacja programowania obiektowego</a><br/>
		</div>
		<div class="linkbut">
		<a class="link" href="ajax.php">AJAX</a><br/>
		</div>
		<div class="linkbut">
		<a class="link" href="database.php">Baza danych</a><br/>
		</div>

	</div>
	<div id="zawartosc">
		<form role="form" action="upload3.php" method="post" enctype="multipart/form-data">
			<div class="cvtekst" id="cos">
				</br>
				<h2>Wybierz pliki do upload'u:</h2>
				</br>
				</br>
				<input type="file" name="fileToUpload1" id="fileToUpload1">
				</br>
				<input type="file" name="fileToUpload2" id="fileToUpload2">
				</br>
				<input type="file" name="fileToUpload3" id="fileToUpload3">
				</br>

			</div>
			<div class="cvtekst">
				</br>
                		<input type="submit" value="Wyslij plik" name="submit">
               		</div>
		</form>
		<div class="cvtekst">




		<?php
			if(isset($_POST["submit"])) 
			{
				$target_dir = "uploadFILE/";
				$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
				$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
				$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);

				$upload = 1;
				$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
				$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
				$imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
				
				if (empty($_FILES['fileToUpload1']['name']) || empty($_FILES['fileToUpload2']['name']) || empty($_FILES['fileToUpload3']['name']))
				{
					echo("</br>Ktorys z plikow nie istnieje! ");
					$upload = 0;
				}
				// sprawdz czy istnieje
				if (is_file($target_file1) && file_exists($target_file1) && $upload != 0) 
				{
 	   				echo("</br>Pierwszy plik juz istnieje! ");
					$upload = 0;
  				}
				if (is_file($target_file2) && file_exists($target_file2) && $upload != 0 ) 
				{
 	   				echo("</br>Drugi plik juz istnieje! ");
					$upload = 0;
  				}
				if (is_file($target_file3) && file_exists($target_file3) && $upload != 0 ) 
				{
 	   				echo("</br>Trzeci plik juz istnieje! ");
					$upload = 0;
  				}

	
				// rozmiar pliku
				if ($_FILES["fileToUpload1"]["size"] > 20000 && $upload != 0 ) 
				{
 	   				echo("</br>Pierwszy plik jest za duzy!");
					$upload = 0;
   				}
				if ($_FILES["fileToUpload2"]["size"] > 20000 && $upload != 0) 
				{
 	   				echo("</br>Drugi plik jest za duzy!");
					$upload = 0;
   				}
				if ($_FILES["fileToUpload3"]["size"] > 20000 && $upload != 0) 
				{
 	   				echo("</br>Trzeci plik jest za duzy!");
					$upload = 0;
   				}


				// rozszerzenia
				if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "txt" && $upload != 0) 
				{
    					echo("</br>Pierwszy plik nie ma odpowiedniego formatu. Dozwolone formaty: .jpg, .png, .jpeg, .txt. ");
    					$upload = 0;
				}
				if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "txt" && $upload != 0) 
				{
    					echo("</br>Drugi plik nie ma odpowiedniego formatu. Dozwolone formaty: .jpg, .png, .jpeg, .txt. ");
    					$upload = 0;
				}
				if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg" && $imageFileType3 != "txt" && $upload != 0) 
				{
    					echo("</br>Trzeci plik nie ma odpowiedniego formatu. Dozwolone formaty: .jpg, .png, .jpeg, .txt. ");
    					$upload = 0;
				}


				// raczej nie powinno tu dojsc jesli wystapil blad, na wszelki wypadek sprawdzamy
				if ($upload == 0) 
				{
    					echo("</br>Nie udalo sie wyslac plikow! ");
				} 
				else 
				{
    					if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) 
					{
        					echo("</br>Plik ". basename( $_FILES["fileToUpload1"]["name"]). " zostal wyslany.");
   	 				} 
					else 
					{
        					echo("</br>Wystapil blad podczas przesylania pierwszego pliku. ");
    					}
					if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) 
					{
        					echo("</br>Plik ". basename( $_FILES["fileToUpload2"]["name"]). " zostal wyslany.");
   	 				} 
					else 
					{
        					echo("</br>Wystapil blad podczas przesylania drugiego pliku. ");
    					}
					if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) 
					{
        					echo("</br>Plik ". basename( $_FILES["fileToUpload3"]["name"]). " zostal wyslany.");
   	 				} 
					else 
					{
        					echo("</br>Wystapil blad podczas przesylania trzeciego pliku. ");
    					}

				}
			}
		?>



		</div>
		<div class="walidators">
		<p>
    			<a href="http://jigsaw.w3.org/css-validator/check/referer">
        			<img style="border:0;width:88px;height:31px"
            				src="http://jigsaw.w3.org/css-validator/images/vcss"
            				alt="Poprawny CSS!" />
    			</a>
			<a href=" http://validator.w3.org/check?uri=referer">
				<img src=" http://www.w3.org/Icons/valid-html401"
					alt="Valid HTML 4.01 Transitional" height="31" width="88">
			</a>
		</p>
		</div>
	</div>	
</div>

</body>
</html>
