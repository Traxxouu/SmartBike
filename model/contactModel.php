<?php
include_once 'bdd.php';

// Sauvegarder un message de contact
function saveContact($nom, $prenom, $email, $message)
{
    $bdd = Bdd();
    $stmt = $bdd->prepare("INSERT INTO contacts (nom, prenom, email, message) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$nom, $prenom, $email, $message]);
}