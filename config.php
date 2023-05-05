<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
$google_client->setClientId('919504303276-g22sf2f7ofb82nct4ollp95atgchj78f.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost/DemoCrud4/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>