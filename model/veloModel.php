<?php
include_once 'bdd.php';

// Récupérer tous les vélos
function getAllVelos()
{
    $bdd = Bdd();
    $velos = $bdd->query("SELECT * FROM velos ORDER BY date_ajout DESC")->fetchAll(PDO::FETCH_ASSOC);
    return $velos;
}

// Récupérer le dernier vélo ajouté
function getLastVelo()
{
    $bdd = Bdd();
    $velo = $bdd->query("SELECT * FROM velos ORDER BY date_ajout DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
    return $velo;
}

// Récupérer un vélo par son ID
function getVeloById($id)
{
    $bdd = Bdd();
    $stmt = $bdd->prepare("SELECT * FROM velos WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}