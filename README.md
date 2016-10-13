# Solution of mobile Money payment in Cameroon

Installation
=============

1) Install the SDK

   **download and install SDK**

2) Be sure of presence of bd and populated it:



3) Start and open it in the browser

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


SDK Standard Edition
========================

Welcome to the SDK Standard Edition - a simple-functional
application that you can use as the skeleton for your new applications based on Mobile Money .

What's inside?
--------------



Enjoy!