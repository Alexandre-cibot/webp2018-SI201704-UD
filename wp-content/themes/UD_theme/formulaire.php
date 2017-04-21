<?php
/*
    Template Name: formulaire
*/
 if($_POST['phone']) {
     // formulaire d'envoie de message.
     if (trim($_POST['phone']) === "" OR !is_numeric(trim($_POST['phone']))) {
         unset($_POST['phone']);
         header('location:' . get_site_url());
     }
     else {
         sendPhoneByEmail();
     }
 }

else {
    $data = json_decode(file_get_contents('php://input'), true);
    if ($data["is_form"]) {
        // on envoie le form
        sendDevisByEmail($data);
    }
    else{
        // On quitte.
        header('location:' . get_site_url());
        exit();
    }

}


// functions a placer dans functions.php plus tard.
function sendPhoneByEmail() {
    $phone_number = $_POST['phone'];

    // the message
    $msg = "Une client potentiel aimerait être rapeller. \nPhone : " . $phone_number . "\n Send by UDwebsite.com";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    // send email
    wp_mail( "julien@citytaps.org", "Recall potential client", $msg);

    header('location: ' . get_site_url());
    exit();

}

function sendDevisByEmail($array) {
    $demande = [];
    $infos = [];
    foreach($array as $key => $value) {
        if ($array[$key] == 1 && $key !== "is_form") {

            $demande[$key] = $value;
        }
        if (is_string($value)) {
            $infos[$key] = $value;
        }
    }

    // the message
    $intro = "Creation de devis par un client potentiel. \n\nVoici les sujets qui l'interesse :\n";
    $list = "";
    $description = "";
    foreach($demande as $key => $value) {
        if ($key == "ask_devis") {
            $list .= " - " . "Demande de devis" . "\n";
        }
        else{
            $list .= " - " . $key . "\n";
        }

    }

    foreach($infos as $key => $value) {
        $description .= " - " . $key . " : " . $value . "\n";
    }

    $msg = $intro . $list . "\nInformation de contact : \n" .  $description;

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    /*mail("julien@citytaps.org","Recall potential client",$msg);*/

    header('location: ' . get_site_url());

}
