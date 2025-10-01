<div class="hero">
    <h1>Bienvenue chez Smartbike</h1>
    <p>Découvrez nos vélos électriques innovants pour une mobilité urbaine écologique</p>
    <a href="?page=produits" class="btn-secondary">Voir tous nos vélos</a>
</div>

<?php if ($lastVelo): ?>
<div class="featured-bike">
    <div class="featured-bike-image">
        <?php if (!empty($lastVelo['photo'])): ?>
            <img src="view/images/<?= htmlspecialchars($lastVelo['photo']); ?>" alt="<?= htmlspecialchars($lastVelo['nom']); ?>">
        <?php else: ?>
            <span style="color: #6c757d;">Image non disponible</span>
        <?php endif; ?>
    </div>
    <div class="featured-bike-content">
        <h2>Notre Dernier Modèle : <?= htmlspecialchars($lastVelo['nom']); ?></h2>
        <div class="bike-price"><?= number_format($lastVelo['prix'], 2, ',', ' '); ?> €</div>
        <div class="bike-description">
            <?= nl2br(htmlspecialchars($lastVelo['description'])); ?>
        </div>
        <div>
            <a href="?page=detailProduit&velo=<?= $lastVelo['id']; ?>" class="btn-primary">Plus d'infos</a>
            <a href="?page=commander" class="btn-secondary">Commander maintenant</a>
        </div>
    </div>
</div>
<?php else: ?>
    <p>Aucun vélo disponible pour le moment.</p>
<?php endif; ?>