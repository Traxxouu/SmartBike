<?php
include_once 'model/veloModel.php';

// Page d'accueil - Affiche le dernier vélo ajouté
function accueil()
{
    $lastVelo = getLastVelo();
    include 'view/accueil.php';
}

// Page produits - Affiche tous les vélos
function produits()
{
    $velos = getAllVelos();
    include 'view/produits.php';
}

// Page détail d'un vélo
function detailProduit()
{
    if (isset($_GET['velo']) && !empty($_GET['velo'])) {
        $id = $_GET['velo'];
        $velo = getVeloById($id);
        
        if ($velo) {
            include 'view/detailProduit.php';
        } else {
            echo "<h2>Vélo non trouvé.</h2>";
        }
    } else {
        echo "<h2>ID du vélo manquant.</h2>";
    }
}