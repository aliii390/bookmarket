<?php

require_once '../connect/connectDB.php';

session_start();

if (
    !isset($_POST['prenom']) || empty(trim($_POST['prenom'])) ||
    !isset($_POST['nom']) || empty(trim($_POST['nom'])) ||
    !isset($_POST['email']) || empty(trim($_POST['email'])) ||
    !isset($_POST['telephone']) || empty(trim($_POST['telephone'])) ||
    !isset($_POST['mdp']) || empty(trim($_POST['mdp']))
) {
    echo "Le prénom, le nom, l'email, le mot de passe et le numéro de téléphone sont requis.";
    exit;
}

$username = htmlspecialchars(trim($_POST['prenom']));
$lastname = htmlspecialchars(trim($_POST['nom']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['telephone']));
$role = htmlspecialchars($_POST['role']);
$password = trim($_POST['mdp']);

try {
    // Vérifier si l'utilisateur existe déjà
    $stmt = $pdo->prepare('SELECT * FROM user WHERE prenom = :prenom AND nom = :nom AND email = :email');
    $stmt->execute([
        ':prenom' => $username,
        ':nom' => $lastname,
        ':email' => $email
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['mdp'])) {
        // Connexion réussie
        $_SESSION['pseudo'] = [
            'id' => $user['id'],
            'prenom' => $user['prenom']
        ];
    } elseif (!$user) {
        // Ajouter un nouvel utilisateur
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (prenom, nom, email, telephone, mdp, role) VALUES (:prenom, :nom, :email, :telephone, :mdp, :role)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':prenom' => $username,
            ':nom' => $lastname,
            ':email' => $email,
            ':telephone' => $phone,
            ':mdp' => $hash,
            ':role' => $role
        ]);

        $_SESSION['pseudo'] = [
            'id' => $pdo->lastInsertId(),
            'prenom' => $username
        ];
    } else {
        $_SESSION["mdp-incorect"] = "Votre mot de passe ou votre identifiant est incorrect.";
        header("Location: ../index.php");
        exit;
    }

    // var_dump($_SESSION);
    // die();
} catch (PDOException $e) {
    echo "Erreur lors de l'insertion : " . $e->getMessage();
}

header("Location: ../index.php");
exit;
?>
