<?php $email = $_POST['email'];
$formcontent="From: $email \n Message: $email";
$recipient = "quentin.goujon@ricl.re";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($email) or die("Erreur!");
echo "Merci!";
?>