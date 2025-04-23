<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - Gestion des absences</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center relative overflow-hidden">

  <!-- 🔶 Carrés décoratifs marron à gauche -->
  <div class="absolute top-0 left-0 w-64 h-64 bg-amber-800 rounded-br-[100px] z-0"></div>
  <div class="absolute bottom-0 left-0 w-64 h-64 bg-amber-800 rounded-tr-[100px] z-0"></div>

  <!-- 🔶 Carré décoratif sous l'image -->
  <div class="absolute right-10 top-[75%] w-40 h-40 bg-amber-800 rounded-tl-[100px] z-0 opacity-90"></div>

  <!-- 💻 Boîte principale -->
  <div class="flex w-full max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden relative z-10">

    <!-- 🧾 Partie gauche : Formulaire -->
    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">

      <!-- Logo -->
      <div class="flex justify-center mb-6">
        <img src="img/lg.png" alt="Logo LG" class="h-32">
      </div>

      <!-- Formulaire -->
      <form action="login.php" method="POST" class="space-y-4">
        <div>
          <label for="identifiant" class="block text-gray-700 mb-1">Identifiant</label>
          <input type="text" id="identifiant" name="identifiant" required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-amber-800">
        </div>

        <div>
          <label for="password" class="block text-gray-700 mb-1">Mot de passe</label>
          <input type="password" id="password" name="password" required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-amber-800">
        </div>

        <button type="submit"
          class="w-full bg-amber-800 hover:bg-amber-900 text-white py-2 rounded-md font-semibold transition">
          Se connecter
        </button>
      </form>

      <!-- Liens bas formulaire -->
      <div class="mt-4 text-sm text-center">
        <a href="forgot_password.php" class="text-amber-800 hover:underline">Mot de passe oublié ?</a>
      </div>

      <p class="mt-2 text-sm text-center text-gray-700">
        Vous n'avez pas de compte ?
        <a href="register.php" class="text-amber-800 hover:underline">Inscrivez-vous</a>
      </p>
    </div>

    <!-- 📸 Partie droite : Image décorative -->
    <div class="hidden md:flex w-1/2 relative">
      <img src="img/lkm.jpg" alt="lkm" class="absolute inset-0 w-full h-full object-cover">
      <div class="relative bg-black bg-opacity-40 w-full h-full flex items-center justify-center text-white p-6">
        <!-- Optionnel : texte ou logo superposé -->
      </div>
    </div>

  </div>

</body>
</html>






