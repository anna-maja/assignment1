<?php
//visa varningar och felmeddelanden
ini_set("display_errors", 1);
?>
<?php
define("PAGE_TITLE", "Shop 'Til You Drop - orderformulär");
include 'header.php'
?>
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

<?php 
$produkt = $_POST[$sortiment[$i][0]];
?>

<h1><?= PAGE_FORM ?></h1>
<h2>Här kan du slutföra din beställning.</h2>
<p>
    <?php
    echo "Du har valt att köpa " . $produkt . ". Utmärkt val!"
    ?>
</p>
<p>Fyll i formuläret nedan för att slutföra din beställning. <br>
Du kommer sedan att få se sammanställningen av alla uppgifter, för att kunna bekräfta. <br>
Ett bekräftelsemail med alla uppgifter kommer därefter att skickas till angiven mailadress.</p>

<table>
<form method="post" action="#">
<!-- exit.php"> -->

<tr><th colspan="2" class="th"> &bull;&bull;&bull;Din beställning<i><input name="produkt" type="hidden" value=<?php echo $produkt ?>></th></tr>
<tr><td colspan="2" style="text-align:center"> <hr><b> Uppgifter om beställaren </b><br>(fält markerade med * är obligatoriska) <hr></td></tr>
<tr><td>* Förnamn: </td><td><input name="fnamn" type="text"></td></tr>
<tr><td>* Efternamn</td><td><input name="enamn" type="text"></td></tr>
<tr><td>* Adress</td><td><input name="adr" type="text"></td></tr>
<tr><td>* Postnummer + ort:</td><td><input name="postadr" type="text"></td></tr>
<tr><td>* E-post:  </td><td><input name="epost" type="text"> </td></tr>
<tr><td>Leveransadress (om annan än ovan): </td><td><input name="levadr" type="text"> </td></tr>
<tr><td>Ev meddelande:</td><td><textarea name="meddelande" rows="5" cols="40"></textarea></td></tr>

</table> 
<?php
?>

<button>
<input type=
"submit" value="Skicka">
</button>
</form>


<?php
//inmatningarna
$produkt = $_POST['produkt'];
$fnamn = $_POST['fnamn'];
$enamn = $_POST['enamn'];
$adr = $_POST['adr'];
$levadr = $_POST['levadr'];
$epost = $_POST['epost'];
$meddelande = $_POST['meddelande'];


echo "<table>"; // börjar med att generera tabell med kanter

echo "<tr><th><h2>Din beställning:</h2></th><th></th></tr>"; // tabellhuvud med rubriker


echo "<tr><td>Produkt</td>" . "&nbsp;" . "<td>" . $produkt . "</td></tr>";
echo "<tr><td>Förnamn</td>" .
    "&nbsp;" . "<td>" . ucwords(strtoupper($fnamn)) . "</td></tr>";
echo "<tr><td>Efternamn</td>" . "&nbsp;" . "<td>" . ucwords(strtoupper($enamn)) . "</td></tr>";
echo "<tr><td>Adress</td>" . "&nbsp;" . "<td>" . ucwords(strtoupper($adr)) . "</td></tr>";
echo "<tr><td>Leveransadress</td>" . "&nbsp;" . "<td>" . ucwords(strtoupper($levadr)) . "</td></tr>";
echo "<tr><td>E-post</td>" . "&nbsp;" . "<td>" . $epost . "</td></tr>";
echo "<tr><td>Meddelande</td>" . "&nbsp;" . "<td>$meddelande</td></tr>";

echo "</table>";
?>


<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>


<?php include 'footer.php' ?>

<?php
/*
Beställningsformulär: 
	Högst upp: h1 Beställningsformulär (konstant? Samma i titel och h1?)
	info om vald produkt (från startsidan via POST-metoden)
	Ange namn, epost-adress, leveransadress, möjlighet till meddelande.
	Skicka == submit
Submit: beställningen skickas med e-post
	till mig
	till kunden
Sidfot – separat footer. Samma på både produkt- och formulärsidan.

Sida 2		
Header-länk
Beställningsformulär
Footer-länk
 */
?>