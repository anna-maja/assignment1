<?php
//visa varningar och felmeddelanden
ini_set("display_errors", 1);
?>
<?php
    define("COMPANY", "Shop 'Til You Drop AB");
    define("WEBMASTER", "Anna-Maja Lithner");
?>
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
<link rel="stylesheet" href="assignment1.css">
<hr>
<footer>
<?=COMPANY?>&nbsp;&nbsp; &bull;&nbsp;  &nbsp;  &nbsp;<?=WEBMASTER?> <br>
Copyright &copy; <?php echo date("Y"); ?> 
</footer>
</body>
</html>


<?php
/*
Välkommen till vår webshop: vanlig h1-rubrik. 
Titeln kan vara en konstant.
Header
	Hela head inkl body-start och h1
	Title konstant
Produkterna ligger i en tabell. 
”Produkter” == tablehead.
Sen varje produkt i en td:
	Produktnamn
	Bild
	Pris
	Köpnu-knapp
Köpnu-knapp: leder till sida med beställningsformulär. 
Beställningsformulär: 
	Högst upp: h1 Beställningsformulär (konstant? Samma i titel och h1?)
	info om vald produkt (från startsidan via GET-metoden)
	Ange namn, epost-adress, leveransadress, möjlighet till meddelande.
	Skicka == submit
Submit: beställningen skickas med e-post
	till mig
	till kunden
Sidfot – separat footer. Samma på både produkt- och formulärsidan.

Sida 1 – startsida	 
Header-länk
Tabell
Footer-länk
Sida 2		
Header-länk
Beställningsformulär
Footer-länk
	


*/
?>