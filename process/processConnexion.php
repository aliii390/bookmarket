<?php 

require_once '../connect/connectDB.php';
session_start();

if (!isset($_POST['mdp']) || empty(trim($_POST['mdp'])) || !isset($_POST['email']) || empty(trim($_POST['email']))) {
    echo "L'email et le mot de passe sont requis.";
    exit;
}

$username = trim($_POST['email']);
$mdp = trim($_POST['mdp']);

try {
    // Récupérer l'utilisateur par email
    $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
    $stmt->execute([':email' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mdp, $user['mdp'])) {
        // Connexion réussie
        $_SESSION['utilisateur'] = [
            'id' => $user['id'],
            'prenom' => $user['prenom']
            // il faut que je stocke l'email le nom et le telephone apres la pause 
        ];
        header("Location: ../front/accueil/accueil.php");
        exit;
    } else {
        // Mot de passe ou email incorrect
        $_SESSION['mdp-incorect'] = "Votre mot de passe ou votre adresse mail est incorrect.";
        header("Location: ../front/login/connexion.php");
        exit;
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}

?>
