<!DOCTYPE HTML>
<html lang="pl">
<head>
  <!--<meta http-equiv="Content-type" content="text/html; charset=utf-8">-->
  <meta charset="utf-8" />
  <script src="tabela_gen.js"></script>
  <meta name="description" content="Programowanie Internetowe - Projekty"/>
  <meta name="keywords" content="programowanie, internetowe" />
  <meta http-equiv= "X-UA-Compatible" content="IE=edge" />
  <title>Upload pliku</title>

  <link rel="Stylesheet" href="../index.css" type="text/css">
</head>
  
<body>
<div id="kontener">
	<div class="bloknag">
		<h1 id="kontenernag" >Upload pliku</h1>
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
		<form role="form" action="upload1.php" method="post" enctype="multipart/form-data">
			<div class="cvtekst" id="cos">
				</br>
				<h2>Wybierz plik do upload'u:</h2>
				</br>
				</br>
				<input type="file" name="fileToUpload" id="fileToUpload">
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
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$upload = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
				// sprawdz czy istnieje
				if (is_file($target_file) && file_exists($target_file)) 
				{
 	   				echo("</br>Plik juz istnieje! ");
					$upload = 0;
  	  				//header('Location: upload.php');
				}
	
				// rozmiar pliku
				if ($_FILES["fileToUpload"]["size"] > 20000) 
				{
 	   				echo("</br>Plik jest za duzy!");
					$upload = 0;
   	 				//header('Location: upload.php');
				}

				// rozszerzenia
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "txt") 
				{
    					echo("</br>Dozwolone formaty: .jpg, .png, .jpeg, .txt. ");
    					$upload = 0;
					//header('Location: upload.php');
				}

				// raczej nie powinno tu dojsc jesli wystapil blad, na wszelki wypadek sprawdzamy
				if ($upload == 0) 
				{
    					echo("</br>Nie udalo sie wyslac pliku! ");
				} 
				else 
				{
    					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{
        					echo("</br>Plik ". basename( $_FILES["fileToUpload"]["name"]). " zostal wyslany.");
   	 				} 
					else 
					{
        					echo("</br>Wystapil blad podczas przesylania pliku. ");
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
