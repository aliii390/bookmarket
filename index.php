<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="./assets/js/burger.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <header class=" bg-[#FDEDD5] flex items-center p-3 gap-10 justify-center sm:justify-start">
        <img src="./assets/img/logo.png" alt="" class="w-32">
        <input type="text" name="recherche" placeholder="Recherchez" class="bg-[#F5702B] px-5  placeholder-white  w-[120px] text-white text-sm rounded-3xl h-7 placeholder:text-sm ">






<!-- Partie menu burger -->
<div id="mySidenav" class="fixed h-full w-[250px] bg-[#F5702B] z-10 -left-[250px] top-0 transition-all duration-500 shadow-lg">

<a id="closeBtn" href="#" class="absolute top-4 right-4 text-xl font-bold cursor-pointer text-gray-600 hover:text-gray-800">×</a>


<div class="text-center py-6 border-b border-gray-300">
<img src="./assets/img/logo.png" alt="" class="w-36">
</div>


<ul class="list-none p-0 m-0 mt-4 space-y-2">
  <li>
    <a href="#" class="flex items-center p-4 text-lg text-white hover:text-gray-800 hover:bg-gray-100 transition rounded-lg">
      
      Livres
    </a>
  </li>
  <li>
    <a href="#" class="flex items-center p-4 text-lg text-white hover:text-gray-800 hover:bg-gray-100 transition rounded-lg">
   
      Support 
    </a>
  </li>
  <li>
    <a href="#" class="flex items-center p-4 text-lg text-white hover:text-gray-800 hover:bg-gray-100 transition rounded-lg">
   
       
    </a>
  </li>
 
  <li class="flex justify-center">
  <a href="#" class="flex justify-center items-center h-10 w-40  px-3 py-2 text-sm text-white bg-[#2A3D37] hover:bg-[#109133] hover:text-white transition rounded-lg">
  <i class="fa-solid fa-user-plus mr-2"></i> 
  <span>Connectez-vous</span>
</a>


  </li>
</ul>


</div>

<a id="openBtn" href="#" class=""><i class="fa-solid fa-bars" style="color: #000000;"></i></a>

<!-- fin du code -->


    </header>


    <main>

    <!-- 1ere section -->

    <section class="bg-imageun w-full h-[200px] bg-cover bg-center relative flex flex-col justify-center items-start pl-8 pr-8">
  <h1 class="text-black text-2xl  font-principale font-semibold text-left ">Bienvenue sur BookMarket</h1>
  <p class="font-principale text-white text-lg  text-left mt-2 ">BookMarket - Plongez dans chaque page</p>
</section>
    <!-- fin de code -->



<!-- 2ème section -->

<section class="bg-[#FDEDD5] flex flex-col gap-8 items-center p-2 ">

<h2 class="font-principale font-semibold text-2xl">Recommandez pour vous</h2>

<div class="flex gap-6 justify-center items-center">
  <img src="./assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
  
  <div class="flex flex-col items-start">
    <h3 class="font-principale text-[18px] w-full font-semibold">Les Couloirs du Destin</h3>
    <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
    <a href="" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center  hover:bg-[#e25e00] transition duration-300 mt-2">
      En savoir plus
    </a>
  </div>
</div>



<div class="flex gap-6 justify-center items-center">
  <img src="./assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
  
  <div class="flex flex-col items-start">
    <h3 class="font-principale text-[18px] w-full font-semibold">Les Couloirs du Destin</h3>
    <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
    <a href="" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center  hover:bg-[#e25e00] transition duration-300 mt-2">
      En savoir plus
    </a>
  </div>
</div>



<div class="flex gap-6 justify-center items-center">
  <img src="./assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
  
  <div class="flex flex-col items-start">
    <h3 class="font-principale text-[18px] w-full font-semibold">Les Couloirs du Destin</h3>
    <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
    <a href="" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center  hover:bg-[#e25e00] transition duration-300 mt-2">
      En savoir plus
    </a>
  </div>
</div>





</section>

<!-- fin de code -->

    </main>


    <footer class="bg-[#2A3D37] flex justify-between items-center p-4">
  <img src="./assets/img/footer.png" alt="Logo" class="">
  <p class="text-white w-[50%] text-right">© 2025 BookMarket, Inc. All rights reserved.</p>
</footer>





</body>

</html>