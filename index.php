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
<!-- Öppnar en tabell att lägga varorna i -->
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


