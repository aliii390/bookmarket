<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="./assets/js/burger.js"></script>
</head>

<body>

    <header class=" bg-[#FDEDD5] flex items-center p-3 gap-10 justify-center">
        <img src="./assets/img/logo.png" alt="" class="w-32">
        <input type="text" name="recherche" placeholder="Recherchez" class="bg-[#F5702B] px-5  placeholder-white  w-[120px] text-white text-sm rounded-3xl h-7 placeholder:text-sm ">






<!-- Partie menu burger -->
        <div id="mySidenav" class="fixed h-full w-[250px] bg-[#F5702B] -left-[250px] top-0 transition-all duration-500 shadow-lg">

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
     
        Filtre
      </a>
    </li>
    <li>
      <a href="#" class="flex items-center p-4 text-lg text-white hover:text-gray-800 hover:bg-gray-100 transition rounded-lg">
        
        Contact
      </a>
    </li>
  </ul>

 
</div>

  <a id="openBtn" href="#" class=""><i class="fa-solid fa-bars" style="color: #000000;"></i></a>

  <!-- fin du code -->


    </header>


</body>

</html>