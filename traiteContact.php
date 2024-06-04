<?php

$name=$_POST['name'];
$firstname=$_POST['firstname'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$message=$_POST['message'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // L'adresse email n'est pas valide
    header('Location: contact.php?err=mail');
    exit(); // Arrêter le script
}


$to = "sabine@thibout.fr";
$subject = "Contact";
$message = "$message

\n\n$name
\n$firstname
\n$phone
\n$email";



 // En-têtes additionnels
$headers[] = 'From: ' . $email;

 // Envoi
mail($to, $subject, $message, implode("\r\n", $headers));

header('Location: contact.php?message=ok');

?>