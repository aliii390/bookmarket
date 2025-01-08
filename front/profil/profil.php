<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link rel="stylesheet" href="../../assets/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="../../assets/js/burger.js"></script>
    <script defer src="../../assets/js/popupProfil.js"></script>
</head>
<body class="bg-[#FDEDD5]  text-gray-800 font-sans">

<header class="bg-[#FDEDD5]  flex items-center p-3 justify-between gap-4 sm:justify-between sm:px-6 xl:justify-around ">
  <!-- Logo -->
  <img src="../../assets/img/logo.png" alt="Logo" class="w-32">

  <!-- Input de recherche -->
  
   <input type="text" name="recherche" placeholder="Recherchez" 
         class="bg-[#F5702B] px-5 placeholder-white w-[180px] text-white text-sm 
                rounded-3xl h-7 placeholder:text-sm sm:w-[250px] sm:h-8 md:w-[150px] lg:w-[250px] xl:w-[350px]">

 
                <div class="md:flex md:items-center">
  <ul class="hidden md:flex md:gap-8 md:items-center">
    <!-- Liens de navigation -->
    <li>
      <a href="#" class="font-principale text-gray-700 hover:text-[#F5702B] transition">Livre</a>
    </li>
    <li>
      <a href="#" class="font-principale text-gray-700 hover:text-[#F5702B] transition">Support</a>
    </li>
    <li>
      <a href="#" class="font-principale text-gray-700 hover:text-[#F5702B] transition">Contact</a>
    </li>
  </ul>

  <!-- Bouton Connectez-vous -->
  <div class="hidden md:flex md:ml-6">
    <a href="#" class="w-[130px] h-8 bg-[#F5702B] text-white font-principale flex items-center justify-center  hover:bg-[#d45920] transition">
    <i class="fa-solid fa-user mr-2" style="color: #ffffff;"></i>
    <?php echo isset($_SESSION['utilisateur']['prenom']) ? $_SESSION['utilisateur']['prenom'] : 'sa marche ap'; ?>
    </a>
  </div>

  <!--  panier -->
  <div class="hidden md:flex md:ml-4">
    
    <a href="#">
      <i class="fa-solid fa-cart-shopping text-black text-lg hover:text-[#F5702B] transition"></i>
    </a>
  </div>
</div>

 

  <!--  menu burger -->
  <a id="openBtn" href="#" class="text-xl text-black md:hidden">
    <i class="fa-solid fa-bars"></i>
  </a>
</header>

<!-- Partie menu burger -->
<div id="mySidenav" 
     class="fixed h-full w-[250px] bg-[#F5702B] z-10 -left-[250px] top-0 
            transition-all duration-500 shadow-lg">
  <!-- Bouton de fermeture -->
  <a id="closeBtn" href="#" 
     class="absolute top-4 right-4 text-xl font-bold cursor-pointer text-gray-600 
            hover:text-gray-800">
    ×
  </a>

  <!-- Logo dans le menu -->
  <div class="text-center py-6 border-b border-gray-300">
    <img src="../../assets/img/logo.png" alt="Logo" class="w-36">
  </div>

  <!-- Liens du menu -->
  <ul class="list-none p-0 m-0 mt-4 space-y-2">
    <li>
      <a href="#" 
         class="flex items-center p-4 text-lg text-white hover:text-gray-800 
                hover:bg-gray-100 transition rounded-lg font-principale sm:font-principale">
        Livres
      </a>
    </li>
    <li>
      <a href="#" 
         class="flex items-center p-4 text-lg text-white hover:text-gray-800 
                hover:bg-gray-100 transition rounded-lg font-principale sm:font-principale">
        Support
      </a>
    </li>
    <li>
      <a href="#" 
         class="flex items-center p-4 text-lg text-white hover:text-gray-800 
                hover:bg-gray-100 transition rounded-lg font-principale sm:font-principale">
        Contact
      </a>
    </li>
    <li class="flex justify-center">
      <a href="#" 
         class="flex justify-center items-center h-10 w-40 px-3 py-2 text-sm 
                text-white bg-[#2A3D37] hover:bg-[#109133] hover:text-white 
                transition rounded-lg">
                <i class="fa-solid fa-user mr-2" style="color: #ffffff;"></i>
        <span class="font-principale sm:font-principale"> <?php echo isset($_SESSION['utilisateur']['prenom']) ? $_SESSION['utilisateur']['prenom'] : 'sa marche ap'; ?></span>
      </a>
    </li>
  </ul>
</div>


<!-- fin du header -->

<!-- Section Profil -->
<main class="max-w-5xl mx-auto mt-10 p-6 sm:p-8 bg-white shadow-lg rounded-lg">
    <div class="text-center mb-6 lg:mb-7">
        <h1 class="text-xl font-bold text-black">Bienvenue sur votre profil</h1>
        <p class="text-gray-600">Gérez vos informations personnelles et vos préférences.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
        
        <div class="lg:col-span-2">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <p class="text-lg">
                    <span class="font-semibold text-gray-700">Nom :</span>
                    <?php echo isset($_SESSION['utilisateur']['nom']) ? $_SESSION['utilisateur']['nom'] : 'Nom inconnu'; ?>
                </p>
                <p class="text-lg mt-4">
                    <span class="font-semibold text-gray-700">Prénom :</span>
                    <?php echo isset($_SESSION['utilisateur']['prenom']) ? $_SESSION['utilisateur']['prenom'] : 'Prénom inconnu'; ?>
                </p>
                <p class="text-lg mt-4">
                    <span class="font-semibold text-gray-700">Email :</span>
                    <?php echo isset($_SESSION['utilisateur']['email']) ? $_SESSION['utilisateur']['email'] : 'Email inconnu'; ?>
                </p>
                <div class="mt-6">
                    <button id="openModalBtn"
                            class="inline-block bg-[#F5702B] text-white px-6 py-2 rounded hover:bg-[#d45920] transition">
                        Modifier le profil
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>


<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white w-full max-w-lg p-6 rounded-lg shadow-lg relative">
        <button id="closeModalBtn" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800">
            <i class="fa-solid fa-times text-xl"></i>
        </button>
        <h2 class="text-xl font-principale text-gray-700 mb-4">Modifier le profil</h2>
        <form action="" method="post" class="space-y-4">
            <div>
                <label for="nom" class="block text-gray-600 font-principale">Nom</label>
                <input type="text" name="nom" id="nom"  value="<?php echo $_SESSION['utilisateur']['nom'] ?? ''; ?>"
                       class="w-full p-3 border border-gray-300 rounded-lg placeholder:font-principale  focus:ring-2 focus:ring-orange-400">
            </div>
            <div>
                <label for="prenom" class="block text-gray-600 font-principale">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['utilisateur']['prenom'] ?? ''; ?>"
                       class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400 placeholder:font-principale">
            </div>
            <div>
                <label for="email" class="block text-gray-600 font-principale">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $_SESSION['utilisateur']['email'] ?? ''; ?>"
                       class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400 placeholder:font-principale">
            </div>
            <button type="submit"
                    class="w-full bg-[#F5702B] font-principale text-white py-3 rounded-lg hover:bg-[#d45920] transition">
                Enregistrer les modifications
            </button>
        </form>
    </div>
</div>





<!-- <footer class="bg-[#2A3D37] flex justify-between items-center p-4">
  <img src="../../assets/img/footer.png" alt="Logo" class="">
  <p class="text-white w-[50%] text-right">© 2025 BookMarket, <span class="text-cyan-600">coded by</span> Ali</p>
</footer> -->



</body>
</html>
