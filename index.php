<?php
// Utilisation du sdk pour la configuration de l'API et les appels rest POST.
require("services/CustumApi.php");


//$custumApi = new CustumAPI("1_4jwm37vfn7s4wc4w0ggwkc4804ck40004ocwsc00sc8k8s4g0k", "1tuz1fhnop8g4sk44g8scwkcks4ogc0kwo4co4cc88og88cgck", "ibusiness", "ibusiness");

// Récupération d'une instance de la classe principale du sdk: EcashMobileAPI + configuration des donnés du developpeur.
$custumApi = CustumAPI::getInstance("19_2dw54kyz4s5cscoog4o8os8g40gcg4kgwgwocgckosog8kk0w4", "3bmm9q18u084s480c0c4w848wows8csk80gc40gw4sooskccko", "demonet", "demonet");

// Autentification du développeur et récupération du token d'accées ou mise à jour de ce dernier.
$acessTk = $custumApi->oauthAuthenticate();

echo "\n ". date('Y-m-d H:i:s')."\n \n";
echo "\n \n \n The access token is: $acessTk \n";

echo "\n \n \n";

// Here we will checkout customer with phoneNumber XXXXXXXXX with amount YYYYYYYY
$phoneNumber = "670992438"; // Numéro du client à débiter.
$amount = "75";              // Montant à débiter.

// Demande de paiement adressée au client pour validation sur son téléphone portable.
$resPayment = $custumApi->requestPayment($amount, $phoneNumber);

echo "\n \n \n";
var_dump($resPayment);

?>
