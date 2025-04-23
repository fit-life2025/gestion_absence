<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer(true);

try {
    // Configuration SMTP
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth = true;
    $email->Username = "latifaait0004@gmail.com"; // Ton adresse Gmail
    $email->Password = "xkwj qutx xmlq dgal"; // Mot de passe d'application
    $email->SMTPSecure = 'tls';
    $email->Port = 587;

    // Informations du destinataire
    $Email = $_POST['email'];
    $nom = $_POST['nom'];
    $email->setFrom('latifaait0004@gmail.com', 'Latifa');
    $email->addAddress($Email, $nom);

    // Contenu du message
    $email->isHTML(true);
    $email->Subject = "Confirmation des données";
    $email->Body = '
        <h2 style="color: #2e86de;">Bienvenue sur notre plateforme !</h2>
        <p>Merci pour votre inscription.</p>
        <p>Cliquez sur le lien ci-dessous pour confirmer votre compte :</p>
        <hr>
        <p style="font-size:12px;color:#888;">Ne répondez pas à ce message. Il est généré automatiquement.</p>
    ';
    $email->AltBody = 'Merci pour votre inscription.';

    // Envoi
    $email->send();
    echo "✅ Email envoyé avec succès !";
} catch (Exception $e) {
    echo "❌ L'envoi a échoué. Erreur : {$email->ErrorInfo}";
}
