<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mot de passe oublié</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Réinitialisation du mot de passe</h2>

    <!-- ✅ Formulaire corrigé -->
    <form id="form-reset" action="réinitialisation.php" method="POST" class="space-y-6">
      <div>
        <label for="email" class="block mb-2 font-semibold text-gray-700">Entrez votre adresse email</label>
        <input 
          type="email" 
          name="email" 
          id="email" 
          required 
          placeholder="exemple@uca.ac.ma"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-800"
        >
      </div>

      <button 
        type="submit"
        class="w-full bg-amber-800 hover:bg-amber-900 text-white py-2 rounded-md font-semibold transition"
      >
        Réinitialiser le mot de passe
      </button>

      <!-- ✅ Message affiché après clic -->
      <p id="message" class="text-center font-medium text-green-600"></p>
    </form>
  </div>

  <!-- ✅ Script pour envoyer et afficher le message après clic -->
  <script>
    const form = document.getElementById('form-reset');
    const message = document.getElementById('message');

    form.addEventListener('submit', function(e) {
      e.preventDefault(); // Empêche le rechargement de la page

      const email = document.getElementById('email').value;

      fetch('réinitialisation.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'email=' + encodeURIComponent(email)
      })
      .then(response => response.text())
      .then(data => {
        message.textContent = data; // Affiche le message retourné par PHP
      })
      .catch(error => {
        message.textContent = "Erreur lors de l'envoi.";
      });
    });
  </script>

</body>
</html>
