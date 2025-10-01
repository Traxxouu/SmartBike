<?php
include_once 'model/veloModel.php';
include_once 'model/commandeModel.php';

function commander()
{
    // Si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier que tous les champs sont présents
        if (isset($_POST['velo_id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'])) {
            
            // Vérifier que les champs ne sont pas vides
            if (empty($_POST['velo_id']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message'])) {
                $error = "Tous les champs sont obligatoires.";
                $velos = getAllVelos();
                include 'view/commander.php';
            } else {
                $velo_id = $_POST['velo_id'];
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                
                // Sauvegarder la commande
                if (saveCommande($velo_id, $nom, $prenom, $email, $message)) {
                    $success = "Merci $prenom $nom ! Votre commande a été enregistrée avec succès.";
                    $velos = getAllVelos();
                    include 'view/commander.php';
                } else {
                    $error = "Une erreur est survenue. Veuillez réessayer.";
                    $velos = getAllVelos();
                    include 'view/commander.php';
                }
            }
        }
    } else {
        // Afficher le formulaire
        $velos = getAllVelos();
        include 'view/commander.php';
    }
}