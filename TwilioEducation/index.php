

<?php

/* Include twilio-php, the official Twilio PHP Helper Library,
 * which can be found at 
 * http://www.twilio.com/docs/libraries
 */ 

require __DIR__ . '/vendor/autoload.php';
        use Twilio\Rest\Client; 

/* Controller: Match the keyword with the customized message reply. */

//function indexUSA(){
//   $response = $response = new Twilio\Twiml();
//   $response->message("Text Help Haiti to get a list of Haitian-led organizations, or organizations with a great track record in Haiti.");
//   echo $response;
//} 

function indexAYITI(){ 
    $response = $response = new Twilio\Twiml();
    $response->message("Text the type of help you need and the name of your city. Ex) 'manje jeremie' or 'medikaman pap' to get back an address and phone number of an organization."); //needs kreyol translation
    echo $response;
} 

function index(){
    
    $response = $response = new Twilio\Twiml();
    $response->message("Text Help Haiti to get a list of Haitian-led organizations, or organizations with a great track record in Haiti. || Text the type of help you need and the name of your city. Ex) 'manje jeremie' or 'medikaman pap' to get back an address and phone number of an organization."); //needs kreyol translation
    echo $response;
    
}

function med(){
    $response = $response = new Twilio\Twiml();
    $response->message("Medecins sans Frontieres\nDrouillard Hospital\nCite Soleil\n+509XXXXXXXX\n"); 
    echo $response;
} 

function manje(){ 
    $response = $response = new Twilio\Twiml(); 
    $response->message("Oganizasyon01\nRue Yon Bagay Adres 01\n+509XXXXXXXX"); 
    echo $response; 
}


/* Read the contents of the 'Body' field of the Request. */ 

$body = $_REQUEST['Body']; 

/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */ 

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

/* Router: Match the ‘Body’ field with index of keywords */ 




switch ($result) { 
    case 'help haiti': 
        //function
        {
        $n = rand(0, 3);
        switch($n){
            case 0: 
                $response = $response = new Twilio\Twiml(); 
                $response->message("Gaskov Clerge Foundation\nMedical Missions, Emergency Relief\nwww.gaskov.org\ninfo@gaskov.org\n561-510-1113"); 
                echo $response;
                break;
                    
            case 1:
                $response = $response = new Twilio\Twiml(); 
                $response->message("Lambi Fund\nCommunity enrichment, Women’s rights, Education, Emergency Relief\nwww.lambifund.org\ninfo@lambifund.com\n202-772-2372"); 
                echo $response;
                break;
                
            case 2:
                $response = $response = new Twilio\Twiml(); 
                $response->message("Sow A Seed\nArts and Recreation, Education, Health/Nutrition, Shelter, Emergency Relief\nwww.sowaseedonline.org\ninfo@sowaseedonline.org\n786-220-0821"); 
                echo $response;
                break;
                
            case 3:
                $response = $response = new Twilio\Twiml(); 
                $response->message("Haiti Communitere\nCommunity Engagement, Emergency Relief (on the ground)\nwww.haiti.communitere.org"); 
                echo $response; 
                break;
            }
        }
        break;
    case 'alo': 
        indexAYITI(); 
        break; 
    case 'hello': 
        indexAYITI(); 
        break;
    case 'ede': 
        indexAYITI(); 
        break;
    case 'medikaman pap': 
        med(); 
        break;
    case 'manje jeremie': 
        manje(); 
        break;
    /* Optional: Add new routing logic above this line. */ 
    default: 
        index(); 
}

    
?>


