<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'accueil':
        include 'controller/veloController.php';
        accueil();
        break;
        
    case 'produits':
        include 'controller/veloController.php';
        produits();
        break;
        
    case 'detailProduit':
        include 'controller/veloController.php';
        detailProduit();
        break;
        
    case 'commander':
        include 'controller/commandeController.php';
        commander();
        break;
        
    case 'contact':
        include 'controller/contactController.php';
        contact();
        break;
        
    default:
        echo "<h1>404 - Page non trouvée</h1>";
        break;
}