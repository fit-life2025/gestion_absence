<?php 
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$email=new PHPMailer(true);

try {
    // Configuration SMTP
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth = true;
    $email->Username = "m.dihi7343@uca.ac.ma"; // Ton adresse Gmail
    $email->Password = "nbkr tvbq eolf vwsc"; // Mot de passe d'application
    $email->SMTPSecure = 'tls';
    $email->Port = 587;

    // Informations du destinataire
    $Email = $_POST['email'];
    $email->setFrom('m.dihi7343@uca.ac.ma', 'm.dihi');
    $email->addAddress($Email);

    // Contenu du message
    $email->isHTML(true);
    $email->Subject = "Confirmation des données";
    $email->Body = '
        <h2 style="color: #92400e;">Réinitialisation de votre mot de passe</h2>
        <p>Bonjour [Prénom de l utilisateur],</p>
        <p>Nous avons reçu une demande de réinitialisation du mot de passe pour votre compte. Pour créer un nouveau mot de passe, veuillez cliquer sur le bouton ci-dessous :</p>
        <hr>
        <button>Réinitialiser mon mot de passe</button>
    ';
    $email->AltBody = '';

    // Envoi
    $email->send();
    echo "✅ Email envoyé avec succès !";
} catch (Exception $e) {
    echo "❌ L'envoi a échoué. Erreur : {$email->ErrorInfo}";
}















?>
