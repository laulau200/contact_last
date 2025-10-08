<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>

$retour = mail('laurent.demazy@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], $_POST['email'], 'From: webmaster@monsite.fr');
    if ($retour)
        echo '<p>Votre message a bien ?t? envoy?.</p>';
?>
</body>
</html>

<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'laurent.demazy@gmail.com';

// Set the email subject
$subject = 'New message from website';

// Build the email content
$body = "Name: $name\n\n
		Email: $email\n\n
		Message:\n$message";
		
// validation des données
if(empty($name) || empty($message) || empty($message){
	echo "Merci de renseigner les informations ! ";

} else {

// envoi du mail

// Send the email
mail(.htmlspecialchars($to)., .htmlspecialchars($subject)., .htmlspecialchars($body).);

// Redirect the user to a thank-you page
header('Location: thank_you.php');
?>