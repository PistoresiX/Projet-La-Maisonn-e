<?php 
//Pour définir chaque input du formulaire.
var_dump ($_POST);
$msg = "fname:".$_POST['firstname']."\n";
$msg .= "lname:".$_POST['lastname']."\n";
$msg .= "emailAddress:".$_POST['email']."\n";
$msg .= "message:".$_POST['message'];



$recipient = "azuma_mugen@yahoo.com";
$subject = "contact";

$mailheaders = "From: azuma_mugen@yahoo.com"  . "\r\n" ;                //\r\n = retour chario = retour à la ligne.
$mailheaders.= "Reply-To: email";

$retour = mail( $recipient, $subject, $msg,  $mailheaders);
var_dump ($retour) ;
if($retour)header("location:accueil2.0.php");                           // retour page d'accueil
?>