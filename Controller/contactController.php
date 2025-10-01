<?php
include_once 'model/contactModel.php';

function contact()
{
    // Si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier que tous les champs sont présents
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'])) {
            
            // Vérifier que les champs ne sont pas vides
            if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message'])) {
                $error = "Tous les champs sont obligatoires.";
                include 'view/contact.php';
            } else {
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                
                // Sauvegarder le contact
                if (saveContact($nom, $prenom, $email, $message)) {
                    $success = "Merci $prenom $nom ! Votre message a été envoyé avec succès.";
                    include 'view/contact.php';
                } else {
                    $error = "Une erreur est survenue. Veuillez réessayer.";
                    include 'view/contact.php';
                }
            }
        }
    } else {
        // Afficher le formulaire
        include 'view/contact.php';
    }
}