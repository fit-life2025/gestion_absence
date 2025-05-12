<?php
// Lire le token depuis l'URL
$token = $_GET['token'] ?? '';

// Vérifier le token dans le fichier tokens.json
$data = json_decode(file_get_contents('tokens.json'), true);
$email = array_search($token, $data);

if (!$email) {
    echo "<div style='color: red; font-weight: bold; text-align:center; margin-top:50px;'>❌ Lien invalide ou expiré.</div>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Nouveau mot de passe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-semibold text-center text-[#92400e] mb-6">Définir un nouveau mot de passe</h2>
    
    <form action="sauvegarde_mdp.php" method="POST" class="space-y-4">
      <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">

      <div>
        <label class="block text-gray-700 font-medium mb-1">Nouveau mot de passe</label>
        <input type="password" name="new_password" required 
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#92400e]">
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Confirmer le mot de passe</label>
        <input type="password" name="confirm_password" required 
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#92400e]">
      </div>

      <button type="submit"
              class="w-full bg-[#92400e] hover:bg-[#7a350c] text-white py-2 rounded-md font-semibold transition duration-300">
        Mettre à jour le mot de passe
      </button>
    </form>
  </div>

</body>
</html>
