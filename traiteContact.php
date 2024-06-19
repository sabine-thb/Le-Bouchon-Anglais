<?php

$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$phone = htmlspecialchars($_POST['phone']);
$subject = htmlspecialchars($_POST['subject']);
$email = htmlspecialchars($_POST['email']);
$messageBody = htmlspecialchars($_POST['message']);

// Convertir les sauts de ligne en balises <br>
$messageBody = nl2br($messageBody);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // L'adresse email n'est pas valide
    header('Location: contact.php?err=mail');
    exit(); // Arrêter le script
}

$to = "felicity@lebouchonanglais.com";

// Message en format HTML pour inclure les sauts de ligne
$message = "
<html>
<head>
  <title>Message de contact</title>
</head>
<body>
  <p>$messageBody</p>
    <h4>Message provenant de :</h4>
  <p>
    Nom: $name <br>
    Prénom: $firstname <br>
    Téléphone: <a href='tel:$phone'>$phone</a> <br>
    Email: <a href='mailto:$email'>$email</a>
  </p>
</body>
</html>
";

$headers = [
    'From: ' . $email,
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/html; charset=utf-8'
];

if (mail($to, $subject, $message, implode("\r\n", $headers))) {
    // Envoi réussi, redirection avec message de succès
    header('Location: contact.php?message=ok');
    exit();
} else {
    // Envoi échoué, redirection avec message d'erreur
    header('Location: contact.php?err=send');
    exit();
}

?>
