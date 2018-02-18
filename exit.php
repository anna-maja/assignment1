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
$produkt = $_POST['produkt'];
?>

<?php

/*
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
 */

 //definition av alla arrayPOSTer som ska användas. 
$produkt = $_POST['produkt'];
$fnamn = $_POST['fnamn'];
$enamn = $_POST['enamn'];
$adr = $_POST['adr'];
$levadr = $_POST['levadr'];
$epost = $_POST['epost'];
$meddelande = $_POST['meddelande'];


?>


<?php


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
<p><h2>Slutför beställningen</h2>
<?php
/*
// Hämta data från formuläret via metoden POST
$name    = $_POST($fnamn.$enamn);
$mail    = $_POST($epost);
$message = $_POST(ordersammanfattning());
$message = "Ett meddelande från $name. " . $message;

// Argument som behövs i funktionen mail
$to = "Ange mottagarens e-post";
$subject = "Meddelande från $name";
$headers = "From: $mail";

if(isset($_POST['epost'])){
    mail($to , $subject, $message, $headers);
    echo "<h2>Ditt meddelande har skickats.</h2>";
    echo "<h2>Vi återkommer efter lunch!</h2>";
}
else{
    echo "<h2>Felaktig adress!</h2>";
}
?>
<form method="post" action="mail.php">
<button>
<input type=
"submit" value="Skicka">
</button>
</form>
</p>
*/
?>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include 'footer.php' ?>