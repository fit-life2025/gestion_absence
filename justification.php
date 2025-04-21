<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Justificatif</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="justif">
    <div class="jus">
       <h1>Ajouter justificatif</h1>
    </div>

    <div class="form-container">
      <label for="choix">Motif de l'absence :</label>
      <select name="choix" id="choix">
      <option>Sélectionnez un motif</option>
      <option>Rendez-vous médical</option>
      <option>Maladie</option>
      <option>Raison familiale</option>
      <option>Problème de transport</option>
    </select>

    <label>Description :</label>
    <textarea placeholder="Veuillez décrire la raison de votre absence"></textarea>

    <label>Type de document :</label>
    <div class="radio-group">
      <label class="radio-option">
        <input type="radio" name="doc-type" id="certificat">
        Certificat médical
      </label>

      <label class="radio-option">
        <input type="radio" name="doc-type" id="convocation">
        Convocation
      </label>

      <label class="radio-option">
        <input type="radio" name="doc-type" id="autre">
        Autre document
      </label>
  
    </div>



    <label>Document justificatif :</label>
    <div class="upload">
      <div class="content">
        <input type="file" id="upload-file" style="display: none;">
        <label for="upload-file"><i class="fa-solid fa-file-arrow-up" style="font-size: 30px;"></i></label>
        <p>Importer votre fichier</p>
      </div>
      <div class="choice-file" id="choice" style="display: none;">
        <p class="name" id="name">Nom de fichier</p>
        <span class="close" id="close"><i class="fa-solid fa-xmark"></i></span>
      </div>
    </div>
    <button type="submit">Confirmer</button>
  </div>

  <script>
    const uploadInput = document.getElementById("upload-file");
    const choiceBox = document.getElementById("choice");
    const fileNameText = document.getElementById("name");
    const closeBtn = document.getElementById("close");

    uploadInput.addEventListener('change', function () {
      const file = uploadInput.files[0];
      if (file) {
        fileNameText.innerText = file.name;
        choiceBox.style.display = "flex";
      }
    });

    closeBtn.onclick = function () {
      fileNameText.innerText = '';
      choiceBox.style.display = "none";
      uploadInput.value = ''; // Réinitialiser le champ fichier
    }
  </script>

</body>
</html>

