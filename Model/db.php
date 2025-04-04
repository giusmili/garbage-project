<?php

# db.php

    $host = 'localhost'; // ou votre hôte de base de données
    $dbname = 'classements';
    $username = 'root'; // votre nom d'utilisateur
    $password = ''; // votre mot de passe

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Configuration de l'option pour générer des exceptions en cas d'erreurs
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
}
?>
