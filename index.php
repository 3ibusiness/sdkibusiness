<?php
// Utilisation du sdk pour la configuration de l'API et les appels rest POST.
require("services/CustumApi.php");


// Récupération d'une instance de la classe principale du sdk: API + configuration des donnés du developpeur.
$custumApi = CustumAPI::getInstance("Client_id", "client_token", "username", "password");

// Autentification du développeur et récupération du token d'accées ou mise à jour de ce dernier.
$acessTk = $custumApi->oauthAuthenticate();

echo "\n ". date('Y-m-d H:i:s')."\n \n";
echo "\n \n \n The access token is: $acessTk \n";

echo "\n \n \n";

// Here we will checkout customer with phoneNumber XXXXXXXXX with amount YYYYYYYY
$phoneNumber = "670992438"; // Numéro du client à débiter should be 9 digits.
$amount = "75";              // Montant à débiter.

// Demande de paiement adressée au client pour validation sur son téléphone portable.
$resPayment = $custumApi->requestPayment($amount, $phoneNumber);

echo "\n \n \n";
var_dump($resPayment);

?>
