<!DOCTYPE html>
<html>
    <body>

        <?php

/* Include twilio-php, the official Twilio PHP Helper Library,
 * which can be found at 
 * http://www.twilio.com/docs/libraries
 */ 

include('Services/Twilio.php'); 


require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

use Twilio\Rest\Client;
        
$sid = 'ACd70778ffdda321fbe9257c5325eccb52';
$twisid='MG1e8f58fca93ffc25d449e30e43b02674';
$token = '
662df492ede76973cbf937e9502051f5
';
$client = new Client($sid, $token);

/* Controller: Match the keyword with the customized SMS reply. */

function indexUSA(){
    $client->account->messages->create(array(  
	'From' => "+19173830135", 
        'Body' => "Reply with 'help haiti' to get a list of Haitian-led organizations."
));
//   $response = new Services_Twilio_Twiml();
//   $response->sms("Reply with 'help haiti' to get a list of Haitian-led organizations.");
//   echo $response;
} 
        
function indexHAITI(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Reply with the kind of help you need (medikaman, manje) and the name of your city. 'Egzanp: medikaman port-au-prince.'");
    
}

function charity(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Gaskov Clerge Foundation
Medical Missions, Emergency Relief
www.gaskov.org
info@gaskov.org
561-510-1113

Lambi Fund
Community enrichment, Women’s rights, Education, Emergency Relief
www.lambifund.org
info@lambifund.com
202-772-2372

Sow A Seed
Arts and Recreation, Education, Health/Nutrition, Shelter, Emergency Relief
www.sowaseedonline.org
info@sowaseedonline.org
786-220-0821

Haiti Communitere
Community Engagement, Emergency Relief
www.haiti.communitere.org  
    "); 
    echo $response;
} 

function medPap(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Haiti Communitere
    19 Rue Pelican, Port-au-Prince
    +509 37 53 1771
    "); 
    echo $response;
} 
        
function medCite(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Medecins sans Frontieres (MSF)
Hopital Drouillard
Cite Soleil, PAP");
    echo $response;
}

function food(){ 
    $response = new Services_Twilio_Twiml(); 
    $response->sms("Pigeon. A stout seed- or fruit-eating bird with a small head, short legs, and a cooing voice, typically having gray and white plumage."); 
    echo $response; 
}


/* Read the contents of the 'Body' field of the Request. */ 

$body = $_REQUEST['Body']; 

/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */ 

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 
  
/* keywords */
$food = "manje";
$medicine = "medikaman";
$shelter = "abri";
        


/* Router: Match the ‘Body’ field with index of keywords */ 

switch ($result) { 
    case 'help haiti': 
        charity(); 
        break; 
    case 'helphaiti': 
        charity(); 
        break; 
    case $food + 'pap': 
        food(); 
        break; 
    case $food + 'port au prince': 
        food(); 
        break; 
    case $medicine + 'pap':
        med();
        break
    case $medicine + 'cite soleil':
        medCite();
        break
    case $medicine + 'pap':
        medCite();
        break
    case $medicine + 'port au prince':
        medCite();
        break
    /* Optional: Add new routing logic above this line. */ 
    default: 
        indexUSA(); 
}

        echo "Hello, the test worked!"

    </body>

</html>