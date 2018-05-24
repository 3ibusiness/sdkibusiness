<?php
// Utilisation du sdk pour la configuration de l'API et les appels rest POST.
require("services/CustumApi.php");


// Récupération d'une instance de la classe principale du sdk: API + configuration des donnés du developpeur.
$custumApi = CustumAPI::getInstance("25_1m12uorsvdtwocow80ocs04sg4ks40wwc8goc40skswk4ooggg", "cuf1w16nnhckgkcccc00gkko40sg08socwwo8kg40oog40gk0", "demoapi", "demoapi");

// Autentification du développeur et récupération du token d'accées ou mise à jour de ce dernier.
$acessTk = $custumApi->oauthAuthenticate();

echo "\n ". date('Y-m-d H:i:s')."\n \n";
echo "\n \n \n The access token is: $acessTk \n";

echo "\n \n \n";

// Here we will checkout customer with phoneNumber XXXXXXXXX with amount YYYYYYYY
$phoneNumber = "677925286"; // Numéro du client à débiter should be 9 digits.
$amount = "100";              // Montant à débiter.

// Demande de paiement adressée au client pour validation sur son téléphone portable.
$resPayment = $custumApi->requestPayment($amount, $phoneNumber);

echo "\n \n \n";
var_dump($resPayment);

?>
