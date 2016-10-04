<!DOCTYPE html>
<html>
<body>

<?php
// Required if your envrionment does not handle autoloading
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACd70778ffdda321fbe9257c5325eccb52';
$token = '
662df492ede76973cbf937e9502051f5
';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+13472782863', //+19292168151
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19173830135',
        // the body of the text message you'd like to send
        'body' => 'Hello from VANESSA RENE'
    )
);
    
    echo "Sent message!"
    
    ?>
    
    </body>
    </html>