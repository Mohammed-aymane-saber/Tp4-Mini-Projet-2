<h2>Liste des joueurs</h2>
<ul>
    <?php foreach ($joueurs as $j): ?>
        <li><?= htmlspecialchars($j['nom']) ?> - <?= htmlspecialchars($j['poste']) ?></li>
    <?php endforeach; ?>
</ul>
<a href="?action=ajouter">Ajouter un joueur</a>
