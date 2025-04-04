<?php
    # Requête pour récupérer les données de la table
   
    
    $sql = "SELECT nom, type, version, url FROM donaldtablemusksaloperie";
    $stmt = $pdo->query($sql);
    
    # Vérifier si des données sont retournées
    if ($stmt->rowCount() > 0) {
        # Récupérer les données sous forme de tableau associatif
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $rows = [];
    }