<?php
include 'header.php'
?>
<h1><?= PAGE_EXIT ?></h1>
<link rel="stylesheet" href="assignment1.css">

<p>
 Vänligen bekräfta nedanstående uppgifter. 
 </p>

<p>
<?php
$produkt = $_GET['produkt'];
?>

<?php

/*
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
 */

 //definition av alla arrayGETer som ska användas. 
$produkt = $_GET['produkt'];
$fnamn = $_GET['fnamn'];
$enamn = $_GET['enamn'];
$adr = $_GET['adr'];
$levadr = $_GET['levadr'];
$epost = $_GET['epost'];
$meddelande = $_GET['meddelande'];




echo "<table>"; // börjar med att generera tabell med kanter

echo "<tr><th></th><th></th></tr>"; // tabellhuvud med rubriker


echo "<tr><td>Produkt</td>" . "&nbsp;" . "<td>" . $produkt . "</td></tr>";
echo "<tr><td>Förnamn</td>" .
    "&nbsp;" . "<td>" . ucwords(strtolower($fnamn)) . "</td></tr>";
echo "<tr><td>Efternamn</td>" . "&nbsp;" . "<td>" . ucwords(strtolower($enamn)) . "</td></tr>";
echo "<tr><td>Adress</td>" . "&nbsp;" . "<td>" . ucwords(strtolower($adr)) . "</td></tr>";
echo "<tr><td>Leveransadress</td>" . "&nbsp;" . "<td>" . ucwords(strtolower($levadr)) . "</td></tr>";
echo "<tr><td>E-post</td>" . "&nbsp;" . "<td>" . $epost . "</td></tr>";
echo "<tr><td>Meddelande</td>" . "&nbsp;" . "<td>$meddelande</td></tr>";

echo "</table>";
?>
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>
<?php include 'footer.php' ?>