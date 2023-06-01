<?php
// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC16a383d2a19bac3334e2ed7fd40aef2b';
$auth_token = 'a50162dd29d7c3f6b4de39b1050b8cd5';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+13203358118";
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+573234850422',
    array(
        'from' => $twilio_number,
        'body' => 'Hola soy Carlos, esto es una prueba para el laboratorio de SW III!'
    )
);

