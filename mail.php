<?php
/*
$produkt = $_GET['produkt'];
$fnamn = $_GET['fnamn'];
$enamn = $_GET['enamn'];
$adr = $_GET['adr'];
$levadr = $_GET['levadr'];
$epost = $_GET['epost'];
$meddelande = $_GET['meddelande'];
*/

// Hämta data från formuläret via metoden POST
$name    = $_POST['fnamn'];
$mail    = $_POST['epost'];
$message = $_POST['yourmessage'];
$message = "Ett meddelande från $name. " . $message;

// Argument som behövs i funktionen mail
$to = "Ange mottagarens e-post";
$subject = "Meddelande från $name";
$headers = "From: $mail";
if(isset($_POST['yourmail'])){
    mail($to , $subject, $message, $headers);
    echo "<h2>Ditt meddelande har skickats.</h2>";
    echo "<h2>Vi återkommer efter lunch!</h2>";
}
else{
    echo "<h2>Felaktig adress!</h2>";
}

print "<hr><pre>My POST ";
print_r($_POST);
print "</pre>";
