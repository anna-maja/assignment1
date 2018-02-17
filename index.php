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
<link rel="stylesheet" href="assignment1.css">
<h1><?= PAGE_INDEX ?> - en annan slags webshop!</h1>
<h2>Välkommen till webshopen!</h2>
<br>

<form method="post" action="orderform.php">
<br>

<table>
<tr><th colspan="3" class="th"><h2>Välj produkt</h2></th><th></th><th></th></tr>
<tr>

<td class="prtab"><p> Girl With Hood </p><br>
<img src="images/girlWithHood.jpg" alt="" width="200px"><br>
<p> 549 kr </p> <br>
<button>
<?php $name = "Girl With Hood" ?><input type=
"submit" text="Köp" name="produkt" value="Girl&nbsp;With&nbsp;Hood"></button>
</td>

<td class="prtab"><p> Guy In Green </p><br>
<img src="images/guyInGreen.jpg" alt="" width="200px"><br>
<p> 749 kr </p> <br>
<button>
<?php $name = "Guy In Green" ?><input type=
"submit" text="Köp" name="produkt" value="Guy&nbsp;In&nbsp;Green"></button>
</td>

<td class="prtab"><p> Purple Strength</p><br>
<img src="images/purpleSuper.jpg" alt="" width="200px"> <br>
<p> 949 kr </p> <br>
<button>
<?php $name = "Purple Strength" ?><input type=
"submit" text="Köp" name="produkt" value="Purple&nbsp;Strength"></button>
</td>
</tr>
</table>
</form>
<?php include 'footer.php' ?>
<?php
/*
Välkommen till vår webshop: vanlig h1-rubrik. 
Titeln kan vara en konstant.
Header
	Hela head inkl body-start och h1
	Title konstant
Produkterna ligger i en tabell. 
Lagra produkterna i en associative array!!!
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
