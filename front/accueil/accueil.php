
<?php  

require_once '../../connect/connectDB.php';

session_start();
// var_dump($_SESSION);
// die();

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
    <link rel="stylesheet" href="../../assets/css/output.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../../assets/js/burger.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

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
    <a href="../profil/profil.php" class="w-[130px] h-8 bg-[#F5702B] text-white font-principale flex items-center justify-center  hover:bg-[#d45920] transition">
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
      <a href="../profil/profil.php" 
         class="flex justify-center items-center h-10 w-40 px-3 py-2 text-sm 
                text-white bg-[#2A3D37] hover:bg-[#109133] hover:text-white 
                transition rounded-lg">
                <i class="fa-solid fa-user mr-2" style="color: #ffffff;"></i>
        <span class="font-principale sm:font-principale"> <?php echo isset($_SESSION['utilisateur']['prenom']) ? $_SESSION['utilisateur']['prenom'] : 'Invité'; ?></span>
      </a>
    </li>
  </ul>
</div>


<!-- fin du header -->


    <main>

    <!-- 1ere section -->

    <section class="bg-imageun w-full h-[200px] bg-cover bg-center relative flex flex-col justify-center items-start pl-8 pr-8 sm:h-[300px] lg:h-[400px] xl:h-[690px]">
  <h1 class="text-black text-2xl font-principale font-semibold text-left xl:text-6xl">Bienvenue sur BookMarket</h1>
  <p class="font-principale text-white text-lg text-left mt-2 xl:text-4xl">BookMarket - Plongez dans chaque page</p>
</section>
<!-- Fin de la première section -->

<!-- Deuxième section -->
<section class="bg-[#FDEDD5] flex flex-col gap-8 items-center p-4 lg:items-center">
  <h2 class="font-principale font-semibold text-2xl lg:text-center">Recommandez pour vous</h2>

  <!-- Container des articles -->
  <div class="flex flex-col gap-8 items-center lg:flex-row lg:justify-center lg:gap-12 lg:w-full">
    <!-- Article 1 -->
    <article class="flex gap-6 justify-center items-center bg-white rounded-lg p-4 shadow-md lg:flex-col lg:gap-4 lg:items-center lg:w-[300px]">
      <img src="../../assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
      <div class="flex flex-col items-start lg:items-center lg:text-center">
        <h3 class="font-principale text-[18px] font-semibold">Les Couloirs du Destin</h3>
        <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
        <a href="#" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center rounded-lg hover:bg-[#e25e00] transition duration-300 mt-2">
          En savoir plus
        </a>
      </div>
    </article>

    <!-- Article 2 -->
    <article class="flex gap-6 justify-center items-center bg-white rounded-lg p-4 shadow-md lg:flex-col lg:gap-4 lg:items-center lg:w-[300px]">
      <img src="../../assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
      <div class="flex flex-col items-start lg:items-center lg:text-center">
        <h3 class="font-principale text-[18px] font-semibold">Les Couloirs du Destin</h3>
        <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
        <a href="#" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center rounded-lg hover:bg-[#e25e00] transition duration-300 mt-2">
          En savoir plus
        </a>
      </div>
    </article>

    <!-- Article 3 -->
    <article class="flex gap-6 justify-center items-center bg-white rounded-lg p-4 shadow-md lg:flex-col lg:gap-4 lg:items-center lg:w-[300px]">
      <img src="../../assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
      <div class="flex flex-col items-start lg:items-center lg:text-center">
        <h3 class="font-principale text-[18px] font-semibold">Les Couloirs du Destin</h3>
        <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
        <a href="#" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center rounded-lg hover:bg-[#e25e00] transition duration-300 mt-2">
          En savoir plus
        </a>
      </div>
    </article>
  </div>
</section>



<!-- fin de code -->

    </main>


    <footer class="bg-[#2A3D37] flex justify-between items-center p-4">
  <img src="../../assets/img/footer.png" alt="Logo" class="">
  <p class="text-white w-[50%] text-right">© 2025 BookMarket, <span class="text-cyan-600">coded by</span> Ali</p>
</footer>





</body>

</html>
