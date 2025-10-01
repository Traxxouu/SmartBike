<?php
include_once 'bdd.php';

// Sauvegarder une commande
function saveCommande($velo_id, $nom, $prenom, $email, $message)
{
    $bdd = Bdd();
    $stmt = $bdd->prepare("INSERT INTO commandes (velo_id, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$velo_id, $nom, $prenom, $email, $message]);
}