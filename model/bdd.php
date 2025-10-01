<?php

function Bdd()
{
    $host = 'localhost';
    $db   = 'smartbike';
    $user = 'root';
    $pass = '';

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}