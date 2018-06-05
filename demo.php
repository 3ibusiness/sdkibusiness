<?php
// Use sdk for API configuration and POST rest calls.
require("services/CustumApi.php");

// Recovery of an instance of the main class of the sdk: API + configuration of the data of the developer.
//$custumAPI = CustumAPI::getInstance(client_id, client_secret, username, password)
$custumApi = CustumAPI::getInstance("25_1m12uorsvdtwocow80ocs04sg4ks40wwc8goc40skswk4ooggg", "cuf1w16nnhckgkcccc00gkko40sg08socwwo8kg40oog40gk0", "demoapi", "demoapi");

// Developer authentication and recovery of the access token or update of it.
$acessTk = $custumApi->oauthAuthenticate();
if(isset($_POST['tel'])){
$phoneNumber = $_POST['tel'];
$amount = $_POST['amt'];	
}else{
echo "\n ". date('Y-m-d H:i:s')."\n \n";
echo "\n \n \n The access token is: $acessTk \n";

echo "\n \n \n";

// Here we will checkout customer with phoneNumber XXXXXXXXX with amount YYYYYYYY
$phoneNumber = "677925286"; // Client number to be debited should be 9 digits.
$amount = "100";            // Amount to be debited.
}
// Payment request sent to the customer for validation on his mobile phone.
$resPayment = $custumApi->requestPayment($amount, $phoneNumber);
echo "\n \n \n";
var_dump($resPayment);

?>
