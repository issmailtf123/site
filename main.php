<?php

// Récupérer la valeur de inondation
$inondation = $_POST['inondation'];

// Adresse e-mail du destinataire
$to = 'amindari844@gmail.com';

// Objet de l'e-mail
$subject = 'Rapport d\'inondation';

// Corps de l'e-mail
$message =  $inondation;

// En-têtes de l'e-mail
$headers = 'issmailtf18@gmail.com' . "\r\n" .
           'issmailtf18@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Envoyer l'e-mail
mail($to, $subject, $message, $headers);

?>
