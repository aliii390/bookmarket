<?php
require_once '../connect/connectDB.php'; // Inclure la connexion

session_start();

if (
    !isset($_POST['prenom']) || empty(trim($_POST['prenom'])) ||
    !isset($_POST['nom']) || empty(trim($_POST['nom'])) ||
    !isset($_POST['email']) || empty(trim($_POST['email'])) ||
    !isset($_POST['telephone']) || empty(trim($_POST['telephone'])) ||
    !isset($_POST['mdp']) || empty(trim($_POST['mdp']))
) {
    $_SESSION["error"] = "Tous les champs sont obligatoires.";
    header("Location: ../index.php");
    exit;
}

// Récupération des données
$username = htmlspecialchars(trim($_POST['prenom']));
$lastname = htmlspecialchars(trim($_POST['nom']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['telephone']));
$role = isset($_POST['role']) ? htmlspecialchars($_POST['role']) : "Client";
$password = trim($_POST['mdp']);

try {
    // Activer le mode exception pour PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si l'utilisateur existe déjà
    $stmt = $pdo->prepare('SELECT * FROM user WHERE prenom = :prenom AND nom = :nom AND email = :email');
    $stmt->execute([
        ':prenom' => $username,
        ':nom' => $lastname,
        ':email' => $email
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['mdp'])) {
            // Connexion réussie
            $_SESSION['pseudo'] = [
                'id' => $user['id'],
                'prenom' => $user['prenom'],
                'nom' => $user['nom'],
                'email' => $user['email'],
                'telephone' => $user['telephone']
            ];
            header("Location: ../front/accueil/accueil.php");
            exit;
        } else {
            $_SESSION["error"] = "Mot de passe incorrect.";
            header("Location: ../index.php");
            exit;
        }
    } else {
        // Ajouter un nouvel utilisateur
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $idUserPro = null;

        if ($role === "Vendeur") {
            if (
                isset($_POST['companyName']) && !empty(trim($_POST['companyName'])) &&
                isset($_POST['companyAddress']) && !empty(trim($_POST['companyAddress']))
            ) {
                $companyName = htmlspecialchars(trim($_POST['companyName']));
                $companyAddress = htmlspecialchars(trim($_POST['companyAddress']));

                $sqlPro = "INSERT INTO user_pro (nom_entreprise, adresse_entreprise) VALUES (:nom_entreprise, :adresse_entreprise)";
                $stmtPro = $pdo->prepare($sqlPro);
                $stmtPro->execute([
                    ':nom_entreprise' => $companyName,
                    ':adresse_entreprise' => $companyAddress
                ]);

                $idUserPro = $pdo->lastInsertId(); // ID de l'entreprise insérée
            } else {
                $_SESSION["error"] = "Les informations de l'entreprise sont obligatoires pour le rôle Vendeur.";
                header("Location: ../index.php");
                exit;
            }
        }

        // Insérer dans la table `user`
        $sqlUser = "INSERT INTO user (prenom, nom, email, telephone, mdp, role, id_user_pro) 
                    VALUES (:prenom, :nom, :email, :telephone, :mdp, :role, :id_user_pro)";
        $stmtUser = $pdo->prepare($sqlUser);
        $stmtUser->execute([
            ':prenom' => $username,
            ':nom' => $lastname,
            ':email' => $email,
            ':telephone' => $phone,
            ':mdp' => $hash,
            ':role' => $role,
            ':id_user_pro' => $idUserPro
        ]);

        // Récupérer l'utilisateur inséré
        $newUserId = $pdo->lastInsertId();
        $_SESSION['pseudo'] = [
            'id' => $newUserId,
            'prenom' => $username,
            'nom' => $lastname,
            'email' => $email,
            'telephone' => $phone
        ];
       
        header("Location: ../front/accueil/accueil.php");
        exit;
    }
} catch (PDOException $e) {
    $_SESSION["error"] = "Erreur : " . $e->getMessage();
    // header("Location: ../index.php");
    // exit;
}

