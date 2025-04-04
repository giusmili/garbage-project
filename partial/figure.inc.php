<!-- partials/description-section.php -->
<?php
// Inclure la connexion à la base de données


// Requête pour récupérer les données de la table
include_once './controller/baseController.php';
// Connexion : adapte les identifiants selon ta config locale
$donaldTable = new DonaldTable('localhost', 'classements', 'root', '');
$rows = $donaldTable->getData();
?>



<?php foreach ($rows as $row): ?> 
<li>
    <figure>
        <img src="<?= htmlspecialchars($row['url']) ?>" alt="<?= htmlspecialchars($row['nom']) ?>">
        <figcaption>
            <h2><?= htmlspecialchars($row['nom']) ?></h2>
            <ul>
                <li>type : <?= htmlspecialchars($row['type']) ?> 👍</li>
                <li>version : <?= htmlspecialchars($row['version']) ?></li>
            </ul>
        </figcaption>
    </figure>
</li>
<?php endforeach; ?>