<?php 

require_once '../connect/connectDB.php';
session_start();

if (!isset($_POST['mdp']) || empty(trim($_POST['mdp'])) || !isset($_POST['email']) || empty(trim($_POST['email']))) {
    echo "L'email et le mot de passe sont requis.";
    exit;
}

$mail = trim($_POST['email']);
$mdp = trim($_POST['mdp']);
// $phone = trim($_POST['telephone']);
// $prenom = trim($_POST['prenom']);
// $nom = trim($pos)


try {
    $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
    $stmt->execute([':email' => $mail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mdp, $user['mdp']) ) {
        // Connexion réussie
        $_SESSION['utilisateur'] = [
            'id' => $user['id'],
            'prenom' => $user['prenom'],
            'nom' => $user['nom'],
            'telephone' => $user['telephone'], 
            'email' => $mail,
            'role' => $user["role"]
            
            
        ];

        if( $user["role"] === "Vendeur"){

            $sqlVendeur = "SELECT * FROM `user` JOIN user_pro ON user.id_user_pro = user_pro.id WHERE user.email = :email ;";
            $stmt = $pdo->prepare($sqlVendeur);
            $stmt->execute([':email' => $mail]);
            $user_pro = $stmt->fetch(PDO::FETCH_ASSOC);

            $_SESSION['utilisateur'] += [
                'companyName' => $user_pro['nom_entreprise'],
                'companyAddress' => $user_pro['adresse_entreprise'],
            ];

        }

        // var_dump($_SESSION);
        // die();
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
