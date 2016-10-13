<!doctype html>
<?php header('Access-Control-Allow-Origin: *');
require("CustumApi.php");
//$ecashAPI = new EcashMobileAPI("1_4jwm37vfn7s4wc4w0ggwkc4804ck40004ocwsc00sc8k8s4g0k", "1tuz1fhnop8g4sk44g8scwkcks4ogc0kwo4co4cc88og88cgck", "dassi", "dassi");

// Récupération d'une instance de la classe principale du sdk: EcashMobileAPI + configuration des donnés du developpeur.
$apiAPI = EcashMobileAPI::getInstance("1_4jwm37vfn7s4wc4w0ggwkc4804ck40004ocwsc00sc8k8s4g0k", "1tuz1fhnop8g4sk44g8scwkcks4ogc0kwo4co4cc88og88cgck", "dassi", "dassi");
// Autentification du développeur et récupération du token d'accées ou mise à jour de ce dernier.
$acessTk = $apiAPI->oauthAuthenticate();

echo "\n \n \n The access token is: $acessTk";

echo "\n \n \n";

// Here we will checkout customer with phoneNumber XXXXXXXXX with amount YYYYYYYY
$phoneNumber = "672252530"; // Numéro du client à débiter.
$amount = "1"; // Montant à débiter.

// Demande de paiement adressée au client pour validation sur son téléphone portable.
$resPayment = $apiAPI->requestPayment($amount, $phoneNumber);

echo "\n \n \n";
var_dump($resPayment);

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Call API</title>
    <meta name="description" content="Customize Modal POPUPs">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/modal.css">
</head>

<body>

<div>
    <div class="form-group">
        <label>Numero de telephone:</label>
        <input type="text" class="form-control" id="phoneNumber">
    </div>
    <div class="form-group">
        <label>Amount</label>
        <input type="number" class="form-control" id="amount">
    </div>

    <button id="submit" class="btn btn-default">Call API</button>
</div>


<div id="opac"></div>
<a href="#" class="modal-active"> Active Mon numero</a>


<div class="modal" role="document">

    <h2 class="modal-title ">Activation ...</h2>

    <div class="modal-body">

        <div class="row text-center" id="loading">
            <img src="images/large-circle-preloader.gif" class="img-responsive"/>
        </div>
        <div class="row" id="formCode">
            <p class="text-center">Entrer le code Recu pas SMS</p>

            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" id="activationCode" required>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-4">
                <button type="button" id="activated" class="btn btn-primary">Send</button>
            </div>
        </div>
        <div class="row text-center" id="failed">
            <p>Failled</p>
        </div>
    </div>
</div>


<script src="js/jquery.js"></script>
<script src="js/setupFee.js"></script>
<script src="js/modal.js"></script>
</body>
</html>

