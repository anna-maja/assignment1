<?php
include 'header.php'
?>
<h1><?= PAGE_EXIT ?></h1>

<p>
<?php

$fnamn 
$enamn
$adr
$levadr
$epost
$meddelande

echo "<table >"; // tabellstart
echo "<tr><th>" . "Sammanfattning av din beställning" . "</th></tr>";
echo "<tr>Namn<td></td> $fnamn $enamn<td></td></tr>";
echo "<tr>Adress<td></td> $adr<td></td></tr>";
echo "<tr>Leveransadress<td></td> $levadr<td></td></tr>";
echo "<tr>E-post<td></td> $epost<td></td></tr>";
echo "<tr>Meddelande<td></td> $meddelande< td ></td</tr>";
echo "</table >"; // tabell slut

?>
 </p>



<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include 'footer.php' ?>