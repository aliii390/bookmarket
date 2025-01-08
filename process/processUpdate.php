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

$stmt = $pdo->prepare("UPDATE user SET prenom = :prenom, nom = :nom, email = :email WHERE id = :id");
$stmt->execute([
    ':prenom' => $prenom,
    ':nom' => $nom,
    ':email' => $email,
    ':id' => $id,
]);

$_SESSION['utilisateur']['prenom'] = $prenom;
$_SESSION['utilisateur']['nom'] = $nom;
$_SESSION['utilisateur']['email'] = $email;

header("Location: ../front/profil/profil.php");
exit;
