<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <title>Menu Latéral</title>
</head>
<body class="bg-gray-100">
<nav class="bg-[#92400e] text-white px-5 py-3 flex items-center justify-between">
  <div id="bar">
    <button><i class="fa-solid fa-bars text-xl"></i></button>
  </div>
  <strong class="text-center text-lg ">Bienvenue sur votre espace étudiant</strong>
  <div class="flex items-center gap-2">
    <i class="fa-regular fa-user text-xl"></i>
    <p class="text-sm md:text-base">Latifa Ait Hammou</p>
  </div>
</nav>


  <div class=" md:hidden w-64 h-screen bg-[#92400e] text-white p-5 space-y-8 "  id="menu">
    
    <div class="text-xl font-bold flex items-center space-x-2">
      <i class="fa-solid fa-clock text-white"></i>
      <span>GestionAbsences</span>
    </div>
    <div class="flex flex-col items-center text-center space-y-2">
      <div class="w-14 h-14 bg-white text-[#92400e] rounded-full flex items-center justify-center text-xl font-bold">
        M
      </div>
      <div>
        <p class="font-semibold">Mohamed Alami</p>
        <p class="text-sm text-gray-200">Étudiant(e)</p>
      </div>
    </div>

    <div class="space-y-4">
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-table"></i>
        <span>Tableau de bord</span>
      </div>
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-calendar-check"></i>
        <span>Mes absences</span>
      </div>
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-file-lines"></i>
        <span>Justificatifs</span>
      </div>
      <a href="profil.html" class="flex items-center space-x-3">
        <i class="fa-solid fa-user"></i>
        <span>Mon profil</span>
      </a>
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <span>Déconnexion</span>
      </div>
    </div>
  </div>
   <script>
        const menu=document.getElementById("menu");
        const bars=document.querySelector("#bar button");
       bars.onclick=function(){
            if(menu.style.display==="none"|| menu.style.display===" "){
                   menu.style.display="block"
            }
            else{
                 menu.style.display="none";
            }
                     
             
         }
   </script>
</body>
</html>
