<?php
include 'header.php'
?>
<h1><?= PAGE_EXIT ?></h1>

<p>
<?php

$fnamn = $_GET['fnamn']; 
$enamn = $_GET['enamn'];
$adr = $_GET['adr'];
$levadr = $_GET['levadr'];
$epost = $_GET['epost'];
$meddelande = $_GET['meddelande'];

echo "<table >"; // tabellstart
echo "<tr><th>" . "Sammanfattning av din beställning" . "</th></tr>";
echo "<tr>Namn<td></td> $fnamn $enamn<td></td></tr>";
echo "<tr>Adress<td></td> $adr<td></td></tr>";
echo "<tr>Leveransadress<td></td> $levadr<td></td></tr>";
echo "<tr>E-post<td></td> $epost<td></td></tr>";
echo "<tr>Meddelande<td></td> $meddelande<td></td></tr>";
echo "</table >"; // tabell slut

echo "Thank you, come again!";

?>
 </p>
 <p>
 Vänligen bekräfta uppgifterna. 
 </p>



<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include 'footer.php' ?>