<?php $name = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['email'];
$formcontent="From: $name \n Message: $message";
$recipient = "quentin.goujon@ricl.re";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erreur!");
echo "Merci!";
?>