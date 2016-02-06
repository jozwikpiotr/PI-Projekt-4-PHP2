<!DOCTYPE HTML>
<html lang="pl">
<head>
  <!--<meta http-equiv="Content-type" content="text/html; charset=utf-8">-->
  <meta charset="utf-8" />
  <script src="ajax.js"></script>
  <meta name="description" content="Programowanie Internetowe - Projekty"/>
  <meta name="keywords" content="programowanie, internetowe" />
  <meta http-equiv= "X-UA-Compatible" content="IE=edge" />
  <title>AJAX</title>

  <link rel="Stylesheet" href="../index.css" type="text/css">
</head>
  
<body>
<div id="kontener">
	<div class="bloknag">
		<h1 id="kontenernag" >AJAX</h1>
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
		<a class="link" href="">AJAX</a><br/>
		</div>
		<div class="linkbut">
		<a class="link" href="database.php">Baza danych</a><br/>
		</div>

	</div>
	<div id="zawartosc">
		<div class="cvtekst">
			



			<div style="width:300px;height:300px;text-align:center;margin:50px">
                <div id="square" style="background-image: url(jpg_file.png);background-size: 200px 200px;background-repeat: no-repeat;
                width:200px; height:200px;border-radius: 30px;"></div>

		</div>
		<div class="cvtekst">
			<button type="button" onclick="getSync()">Get Synchroniczne</button>
			<button type="button" onclick="getAsync()">Get Asynchroniczne</button>
			<button type="button" onclick="postSync()">Post Synchroniczne</button>
			<button type="button" onclick="postAsync()">Post Asynchroniczne</button>
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
<script type="text/javascript"> 
      myMove();
</script>
</body>
