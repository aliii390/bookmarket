<?php 


session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/css/output.css">
</head>
<body class="bg-[#FDEDD5] min-h-screen flex items-center justify-center">
  <main class="flex flex-col items-center w-full max-w-md px-6 sm:px-8 lg:px-12">
    <form action="../../process/processLogin.php" method="post" class="w-full bg-white p-6 rounded-lg shadow-lg">
      <section class="flex flex-col items-center gap-6">
        <!-- Logo -->
        <img src="../../assets/img/logo.png" alt="Logo" class="w-32 sm:w-40">

       
    

        <input
          type="email"
          name="email"
          placeholder="Adresse Mail"
          class="w-full p-3 border  border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale"
        >

     


        <input
          type="password"
          name="mdp"
          placeholder="Mot de passe"
          class="w-full p-3 border  border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale"
        >
       
     


        <!-- Bouton de connexion -->
        <button
          type="submit"
          class="w-full p-3 bg-orange-400  text-white font-semibold rounded-lg hover:bg-orange-500 transition duration-300 placeholder:font-principale"
        >
          Se connectez
        </button>
      </section>
    </form>
  </main>
</body>

</html>