<!DOCTYPE HTML>
<html lang="pl">
<head>
  <!--<meta http-equiv="Content-type" content="text/html; charset=utf-8">-->
  <meta charset="utf-8" />
  <script src="tabela_gen.js"></script>
  <meta name="description" content="Programowanie Internetowe - Projekty"/>
  <meta name="keywords" content="programowanie, internetowe" />
  <meta http-equiv= "X-UA-Compatible" content="IE=edge" />
  <title>Download plików</title>

  <link rel="Stylesheet" href="../index.css" type="text/css">
</head>
  
<body>
<div id="kontener">
	<div class="bloknag">
		<h1 id="kontenernag" >Download plików</h1>
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
		<div class="cvtekst">
			</br>
			<table id="pobieranie">
				<tr>
					<td><h3>Lp.</h3></td>
					<td><h3>Nazwa</h3></td>
					<td><h3>Rozszerzenie</h3></td>
					<td><h3>Rozmiar</h3></td>
				</tr>





				<?php
					$directory = "uploadFILE/";
					$a = scandir($directory);
					if(count($a) <= 2)
					{
						echo("
							<tr>
								<td>brak</td>
								<td>brak</td>
								<td>brak</td>
								<td>brak</td>
							</tr>
						");
	
					}
					for($i=2;$i<count($a);$i++)
					{
						$filePath  = $directory . $a[$i];
						$imageFileType = pathinfo($filePath,PATHINFO_EXTENSION);
						$imageFileType = "." . $imageFileType;
						$fileName = basename($filePath);
						$fileName = basename($filePath, $imageFileType);
						$fileSiz = "" . filesize($filePath) . " B";
						$download2_php_fName_dir = "download2.php?" . "p=" . $filePath;
						$lp = $i-1 . ".";
						echo("
							<tr>
								<td>$lp</td>
								<td><a href=$download2_php_fName_dir>$fileName</a></td>
								<td>$imageFileType</td>
								<td>$fileSiz</td>
							</tr>
						");

					}
				?>





			</table>

		</div>
		<div class="cvtekst">
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
