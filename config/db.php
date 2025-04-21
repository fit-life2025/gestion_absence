<?php
$user = 'root';
$password = ''; // Mot de passe vide par défaut (XAMPP)
$dsn = 'mysql:host=localhost;port=3307;dbname=gestion_absence;charset=utf8mb4';
try {
    $bd = new PDO($dsn, $user, $password);
    echo "Connexion réussie ✅";
} catch(PDOException $e) {
    echo "<h3>Erreur de connexion MySQL</h3>";
    echo "<p><strong>Message:</strong> " . $e->getMessage() . "</p>";
    echo "<p><strong>Fichier:</strong> " . $e->getFile() . "</p>";
    echo "<p><strong>Ligne:</strong> " . $e->getLine() . "</p>";
    die;
}
?>