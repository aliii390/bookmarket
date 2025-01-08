<?php
session_start();
require_once '../connect/connectDB.php';

if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['email'])) {
    die("Tous les champs sont obligatoires.");
}



$prenom = htmlspecialchars(trim($_POST['prenom']));
$nom = htmlspecialchars(trim($_POST['nom']));
$email = htmlspecialchars(trim($_POST['email']));
$id = htmlspecialchars(trim($_SESSION['utilisateur']['id'])); 
$id_user_pro = htmlspecialchars(trim($_SESSION['id_user_pro']));
$stmt = $pdo->prepare("UPDATE user SET prenom = :prenom, nom = :nom, email = :email WHERE id = :id");
$stmt->execute([
    ':prenom' => $prenom,
    ':nom' => $nom,
    ':email' => $email,
    ':id' => $id,
]);


if ($role === "Vendeur") {
    if (
        isset($_POST['companyName']) && !empty(trim($_POST['companyName'])) &&
        isset($_POST['companyAddress']) && !empty(trim($_POST['companyAddress']))
    ) {
        $companyName = htmlspecialchars(trim($_POST['companyName']));
        $companyAddress = htmlspecialchars(trim($_POST['companyAddress']));

        $sqlPro = "UPDATE user_pro SET nom_entreprise = :nom_entreprise, adresse_entreprise = :adresse_entreprise WHERE id = :id_user_pro";
        $stmtPro = $pdo->prepare($sqlPro);
        $stmtPro->execute([
            ':nom_entreprise' => $companyName,
            ':adresse_entreprise' => $companyAddress,
            ':id_user_pro' => $id_user_pro
        ]);

        $idUserPro = $pdo->lastInsertId(); 
    } else {
        $_SESSION["error"] = "Les informations de l'entreprise sont obligatoires pour le rôle Vendeur.";
        header("Location: ../index.php");
        exit;
    }
    $_SESSION['utilisateur']['companyName'] = $companyName;
    $_SESSION['utilisateur']['companyAddress'] = $companyAddress;

}

$_SESSION['utilisateur']['prenom'] = $prenom;
$_SESSION['utilisateur']['nom'] = $nom;
$_SESSION['utilisateur']['email'] = $email;

header("Location: ../front/profil/profil.php");
exit;
