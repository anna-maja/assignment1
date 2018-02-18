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


<?php
// en array bestående av produkterna. Produkterna i sin tur är en array var, bestående av namn, bild och pris.
$sortiment = array (
    array("Girl&nbsp;With&nbsp;Hood", "images/girlWithHood.jpg", "749"),// produkt 1
    array("Guy&nbsp;In&nbsp;Green", "images/guyInGreen.jpg", "749" ),   // produkt 2
    array("Purple&nbsp;Strength", "images/purpleSuper.jpg", "949")      // produkt 3
)
?>

<form method="post" action="orderform.php">
<br>
<!-- Öppnar en tabell att lägga varorna i -->
<table> 
<tr><th colspan="3" class="th"><h2>Välj produkt</h2></th><th></th><th></th></tr>
<tr>

<?php 
// fyller tabellens td-n med varje varas namn, bild och pris.
for ($i = 0; $i < count($sortiment); $i++) {   // räknare från 0, under arrayens längd, öka med 1 per varv.

    echo "<td class='prtab'><p>".$sortiment[$i][0]."</p><br>"; // öppnar en cell, lägger in varans namn
    echo "<img src=" . $sortiment[$i][1]. " alt='' width='200px'>" . $sortiment[$i][1]. "<br>"; // lägger in bild
    echo "<p>" . $sortiment[$i][2]. "kr </p> <br>";  // lägger in varans pris
    echo "<button>";                                    // öppnar en knapp
    echo "<input type='submit' name='produkt' value='Köp'>"; // lägger in värdena submit, produkt, köp
    echo "</button>";                                   // stänger knappen
    echo "</td>";                                       // stänger cellen.

}
// här vill jag ha in koden för 
// vald knapp == produktens namn lagras i en variabel som går vidare till nästa sida. 
// vet inte hur jag skall koda med den nya lösningen.
?>

</tr>
</table>
</form>
<?php include 'footer.php' ?>

<!-- Nedan ett försök till lösningar via ett förslag från en klasskamrat  -->
<?php
/*
<a href="formular.php?namn=Iphone8&pris=8500">
<button class="btn primary btn-lg">
Köp
</button><br></br>
</a>
<br>
------------
<?php
echo $_GET['namn'] ?? '';

*/
?>
<!-- Mitt första försök. 
För att överhuvudtaget få förståelse för hur produkterna skulle länkas mellan sidorna, 
gjorde jag det först utan array. Detta eftersom jag tycker att arrayer var ett komplext moment för mycket att börja med.  -->

<?php
/*
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
*/?>


