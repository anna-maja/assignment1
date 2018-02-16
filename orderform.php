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
$produkt = $_POST['produkt'];
?>

<h1><?= PAGE_FORM?></h1>
<h2>Här kan du fylla i din beställning.</h2>
<p>
    <?php
    echo "Du har valt att köpa en " . $produkt . ". Utmärkt val!"
    ?>
</p>
<p>Fyll i formuläret nedan för att slutföra din beställning. <br>
Ett bekräftelsemail med alla uppgifter kommer att skickas till angiven mailadress.</p>


<form method="post" action="exit.php">
Vad heter du? <br>
Förnamn: <input name="fnamn" type="text"> <br>
Efternamn: <input name="enamn" type="text"> <br>
Adress: <input name="adr" type="text"> <br>
Postnummer + ort: <input name="postadr" type="text"> <br>
E-post:  <input name="epost" type="text"> <br>
Leveransadress (om annan än ovan): <input name="levadr" type="text"> <br>
Ev meddelande: <input name="meddelande" type="text"> <br>

<input type=
"submit" value="Skicka">
</form>

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
	info om vald produkt (från startsidan via GET-metoden)
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