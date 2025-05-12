<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>footer.php</title>
</head>
<body>
    <footer class="bg-[#92400e] px-6 py-8 text-white">
        <!-- Logo ENSA à gauche -->
        <div class="flex items-center space-x-4 bg-[#92400e] justify-center" >
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiNtuRXZMy9CyPh0DSprxZ1lQVKnIw5pTJnMh2j4Pl-2h2uEwcOiCl4KRNWQHON9CQbpU&usqp=CAU"
                 alt="logo ensa" class="w-52 h-auto object-contain" />
        </div>

        <!-- Adresse ENSA sous le logo -->
        <div class="mt-4 text-sm text-center">
            <p>Ecole Nationale des Sciences Appliquées - BP 575</p>
            <p>Avenue Abdelkrim Khattabi, 40000, Guéliz - Marrakech</p>
            <p>Tél : (+212) 06 70 09 93 87</p>
            <p>Email : <a href="mailto:direction.ensam@uca.ac.ma" class="underline">direction.ensam@uca.ac.ma</a></p>
        </div>

        <!-- Réseaux sociaux sous l'adresse -->
        <div class="flex justify-center space-x-6 mt-6 text-2xl">
            <a href="https://www.linkedin.com/company/ensa-school/posts/?feedView=all" target="_blank" class="hover:text-gray-300">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://www.facebook.com/ensademarrakech" target="_blank" class="hover:text-gray-300">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a href="https://www.instagram.com/ensa_marrakech_officielle?igsh=MWV5NHZicmkydW1nYQ==" target="_blank" class="hover:text-gray-300">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>

        <!-- Ligne séparatrice -->
        <div class="border-t-2 border-gray-300 my-4"></div>

        <!-- Gestion des absences -->
        <div class="text-center text-sm mt-4">
            <p>La gestion des absences est un processus essentiel pour suivre la présence des étudiants, améliorer la performance académique et garantir une meilleure organisation des cours.</p>
        </div>

        <!-- Copyright -->
        <p class="text-center text-sm mt-4">Copyright © 2024 ENSA. Tous droits réservés.</p>
    </footer>
</body>
</html>
