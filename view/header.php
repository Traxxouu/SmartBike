<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartbike - Ventes de Vélos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        header {
            background: #f8f9fa;
            padding: 1rem 0;
            border-bottom: 2px solid #e9ecef;
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            width: auto;
        }
        
        nav a {
            color: #495057;
            text-decoration: none;
            margin-left: 2rem;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: #007bff;
        }
        
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="view/images/image.png" alt="SmartBike Logo">
            </div>
            <nav>
                <a href="index.php">Accueil</a>
                <a href="?page=produits">Vélos</a>
                <a href="?page=contact">Contact</a>
            </nav>
        </div>
    </header>
    
    <div class="container">