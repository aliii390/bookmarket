<?php 
require_once '../../connect/connectDB.php';
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
    <form action="../../process/processConnexion.php" method="post" class="w-full bg-white p-6 rounded-lg shadow-lg">
      <section class="flex flex-col items-center gap-6">
        <!-- Logo -->
        <img src="../../assets/img/logo.png" alt="Logo" class="w-32 sm:w-40">
        
        <label for="email" class="sr-only">Adresse Mail</label>
        <input
          id="email"
          type="email"
          name="email"
          placeholder="Adresse Mail"
          class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale"
          required
        >
        
        <label for="mdp" class="sr-only">Mot de passe</label>
        <input
          id="mdp"
          type="password"
          name="mdp"
          placeholder="Mot de passe"
          class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale"
          required
        >

        <?php if(isset($_SESSION['mdp-incorect'])): ?>
          <p class="text-red-700 bg-red-100 p-2 rounded"><?php echo $_SESSION['mdp-incorect']; ?></p>
          <?php unset($_SESSION['mdp-incorect']); ?>
        <?php endif; ?>

        <!-- Bouton de connexion -->
        <button
          type="submit"
          class="w-full p-3 bg-orange-400 text-white font-semibold rounded-lg hover:bg-orange-500 transition duration-300 placeholder:font-principale"
        >
          Se connecter
        </button>
      </section>
    </form>
  </main>
</body>
</html>
