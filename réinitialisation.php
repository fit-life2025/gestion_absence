<?php
// Inclusion de PHPMailer
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['email'])) {
    $destinataire = $_POST['email'];
    $token = bin2hex(random_bytes(32)); // 🔐 Génération du token

    // 📁 Charger les anciens tokens (ou initialiser un tableau vide)
    $fichierTokens = 'tokens.json';
    $tokens = file_exists($fichierTokens) ? json_decode(file_get_contents($fichierTokens), true) : [];

    // 💾 Ajouter/Mettre à jour le token pour l'utilisateur
    $tokens[$destinataire] = $token;
    file_put_contents($fichierTokens, json_encode($tokens));

    // 🔗 Lien de réinitialisation
    $lien = "http://localhost/gestion_absences/nouveau_mot_de_passe.php?token=$token";

    // 📧 Préparation et envoi de l'email
    $email = new PHPMailer(true);

    try {
        $email->isSMTP();
        $email->Host = 'smtp.gmail.com';
        $email->SMTPAuth = true;
        $email->Username = 'm.dihi7343@uca.ac.ma';
        $email->Password = 'nbkr tvbq eolf vwsc'; // ⚠️ Mot de passe d'application Gmail
        $email->SMTPSecure = 'tls';
        $email->Port = 587;

        $email->setFrom('m.dihi7343@uca.ac.ma', 'm.dihi');
        $email->addAddress($destinataire);

        $email->isHTML(true);
        $email->Subject = 'Réinitialisation de votre mot de passe';
        $email->Body = "
            <h2 style='color: #92400e;'>Réinitialisation de votre mot de passe</h2>
            <p>Bonjour,</p>
            <p>Vous avez demandé une réinitialisation de votre mot de passe.</p>
            <p>Cliquez sur le lien ci-dessous pour définir un nouveau mot de passe :</p>
            <p><a href='$lien' style='background-color:#92400e;color:white;padding:10px 20px;
            text-decoration:none;border-radius:5px;'>Réinitialiser mon mot de passe</a></p>
            <hr>
            <p>Si vous n'êtes pas à l'origine de cette demande, ignorez simplement ce message.</p>
        ";

        $email->send();
        echo "✅ Un email de réinitialisation a été envoyé à : $destinataire";
    } catch (Exception $e) {
        echo "❌ Erreur lors de l'envoi de l'email : {$email->ErrorInfo}";
    }
} else {
    echo "❌ Adresse email non fournie.";
}
?>
