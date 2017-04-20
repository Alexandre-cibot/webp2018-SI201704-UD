<?php
/*
    Template Name: formulaire
*/
var_dump($_POST);die();

if (trim($_POST['phone']) === "" OR !is_numeric(trim($_POST['phone']))) {
    header('location:' . get_site_url());
}

$phone_number = $_POST['phone'];

// the message
$msg = "A potential client would like to be call for futher information. \nPhone : " . $phone_number . "\n Send by UDwebsite.com";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("julien@citytaps.org","Recall potential client",$msg);

header('location: ' . get_site_url());
