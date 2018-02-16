<!-- 
    här kommer själva startsidan, med tabellen som innehåller varorna.
	 
Header-länk
Rubrik h1 == samma som title
Tabell
Footer-länk

”Produkter” == tablehead.
Sen varje produkt i en td:
	Produktnamn
	Bild
	Pris
	Köpnu-knapp
Köpnu-knapp: leder till sida med beställningsformulär. 
 -->
 <?php
//visa varningar och felmeddelanden
ini_set("display_errors", 1);
?>
<?php
    include 'header.php'
?>
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
<h1><?=PAGE_INDEX?> - en annan slags webshop!</h1>
<h2>Välkommen till webshopen!</h2>

<form method="post" action="orderform.php">
Vad vill du köpa? <br>
Produktnamn: <input name="produkt" type="text"> <br>
<input type=
"submit" value="Köp">
</form>

<a href="orderform.php">Gå till beställningssidan</a>
    

<?php include 'footer.php' ?>
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
