<?php

class DonaldTable
{
    private $pdo;

    # Constructeur pour établir la connexion à la base de données
    public function __construct($host, $dbname, $username, $password)
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    # Méthode pour récupérer les données de la table 'donaldtablemusksaloperie'
    public function getData()
    {
        $sql = "SELECT nom, type, version, url FROM donaldtablemusksaloperie";
        $stmt = $this->pdo->query($sql);

        # Vérification si la requête a retourné des résultats
        if ($stmt->rowCount() > 0) {
            # Retourner les données sous forme de tableau associatif
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return  [];
        }
    }
}

