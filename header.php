<!-- 
här ligger headern
title == en konstant. Används även till h1.
 -->
 <?php
//visa varningar och felmeddelanden
ini_set("display_errors", 1);
?>
<?php
    define("PAGE_INDEX", "Shop 'til you Drop");  /* ändrar titeln i fliken. */
    define("PAGE_FORM", "Shop - Order"); 
    define("PAGE_EXIT", "Shop - Exit"); 
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=PAGE_INDEX?></title>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assignment1.css">
</head>
<body>



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