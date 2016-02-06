<!DOCTYPE HTML>
<html lang="pl">
<head>
  <!--<meta http-equiv="Content-type" content="text/html; charset=utf-8">-->
  <meta charset="utf-8" />
  <script src="tabela_gen.js"></script>
  <meta name="description" content="Programowanie Internetowe - Projekty"/>
  <meta name="keywords" content="programowanie, internetowe" />
  <meta http-equiv= "X-UA-Compatible" content="IE=edge" />
  <title>Prezentacja programowania obiektowego</title>

  <link rel="Stylesheet" href="../index.css" type="text/css">
</head>
  
<body>
<div id="kontener">
	<div class="bloknag">
		<h1 id="kontenernag" >Prezentacja programowania obiektowego</h1>
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
		<a class="link" href="">Prezentacja programowania obiektowego</a><br/>
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



		<?php
			class Osoba
			{
				private $imie;
				private $nazwisko;
				private $pesel;

				public function __construct($imie, $nazwisko, $pesel)
				{
					$this->imie = $imie;
					$this->nazwisko = $nazwisko;
					$this->pesel = $pesel;
				}
				public function __destruct()
				{
				
				}
				public function show()
				{
					echo ("Imie:" . $this->imie . "</br>");
					echo ("Nazwisko: " . $this->nazwisko . "</br>");
					echo ("Pesel: " . $this->pesel . "</br>"); 
				}
			}

			class Student extends Osoba
			{
				private $ocena;
				
				public function __construct($imie, $nazwisko, $pesel, $ocena)
				{
					parent::__construct($imie, $nazwisko, $pesel);
					$this->ocena = $ocena;
				}
				public function __destruct()
				{
				
				}
				public function show()
				{
					parent::show();
					echo ("Ocena: " . $this->ocena . "</br>"); 
				}


			}
			
			echo "<h3>Obiekty przed serializacja:</h3>";

			$obiekt1 = new Osoba("Jan", "Kowalski", 92112425435);
			$obiekt1->show();
			echo "</br>";
			$obiekt2 = new Student("Grzegorz", "Więckowski", 90042135221, 4.23);
			$obiekt2->show();
			

			echo "<h3>Obiekty po serializacji:</h3>";

			$obiekt1_serial= serialize($obiekt1);
			echo "</br>";
			echo $obiekt1_serial;
			echo "</br>";
			echo ("Nie jest mozliwe wywołanie metod obiektow serializowanych.");
			echo "</br>";
			//$obiekt1_serial->show();

			$obiekt2_serial= serialize($obiekt2);
			echo "</br>";
			echo $obiekt2_serial;
			echo "</br>";
			echo ("Nie jest mozliwe wywołanie metod obiektow serializowanych.");
			echo "</br>";
			//$obiekt2_serial->show()


			echo "<h3>Obiekty po unserializacji:</h3>";

			$obiekt1_unserial= unserialize($obiekt1_serial);
			echo "</br>";
			$obiekt1_unserial->show();
			echo "</br>";

			$obiekt2_unserial= unserialize($obiekt2_serial);
			echo "</br>";
			$obiekt2_unserial->show();
			echo "</br>";

		?>



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
