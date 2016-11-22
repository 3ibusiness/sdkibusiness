# Solution of mobile Money payment in Cameroon

SDK Standard Edition
========================

Welcome to the SDK Standard Edition - a simple-functional
application that you can use as the skeleton for your new applications based on Mobile Money .

What's inside?
--------------

** Curl Service **
** Custom API authentication Service **
** index.php **


Installation
============

1. Create your developer account on http://api.3ibusiness.com

2. Connect to the web application http://api.3ibusiness.com/login

   2.1 create your application
   2.2 validate your phone number
   2.3 Pay your setup fee
   2.4 copy you client_id and client_secret that you are going to use to obtain your access token that allow you to call API

3. How to install SDK

   3.1 clone SDK
       **git clone http://github.com/3ibusiness/sdkibusiness.git**
   3.2 download SDK
   3.3 unzip into your server either Xampp or Wampp

4. Update **index.php*

   4.1 paste your client_id, client_secret, username and password in other to obtain access token in the function.
    **CustumAPI::getInstance(client_id, client_secret, username, password);**
   4.2 Fill the Client Phone Number and the amount for the RequestPayment.

5. Start and open it in the browser

   **run Xampp or Wamp**

   Then go to the adress: [http://localhost/name_of_project]


DEVELOPMENT TRICKS
==================

1) Test the API with clientId & clientSecret

     a) Récupérer ses credentials dans la zone 'Applications' sur le menu sur le site: http://localhost:8000/transaction/
    	* Client Id
    	* Client Secret

    b) Obtenir un token de connection pour faire les appels en tappant ce lien avec les variables à modifier:
    http://localhost:8000/oauth/v2/token?client_id=client_id_du_developpeur&client_secret=client_secret_du_developpeur&username=username_du_developpeur&password=password_du_developpeur&grant_type=password

    (variables: client_id, client_secret, username et password).


    La réponse donnée par la sécurité fiable d'OAuth sera de la forme:

    {"access_token":"access_token_of_developpeur_with_a_validity","expires_in":3600,"token_type":"bearer","scope":"user","refresh_token":"refresh_token_of_developpeur_with_a_validity"}



   c) Ensuite récupéré le 'access_token': c'est la clé pour faire les appels.


   d) Url de test de l'API pour les developpeurs:
   http://localhost:8000/api/ping?access_token=access_token_du_developpeur

   So you can enjoy your future calls alone.


Enjoy!
