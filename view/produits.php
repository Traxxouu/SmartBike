<h1 class="page-title">Nos Vélos Électriques</h1>

<?php if (!empty($velos)): ?>
<div class="bikes-grid">
    <?php foreach ($velos as $velo): ?>
    <div class="bike-card">
        <div class="bike-image">
            <?php if (!empty($velo['photo'])): ?>
                <img src="view/images/<?= htmlspecialchars($velo['photo']); ?>" alt="<?= htmlspecialchars($velo['nom']); ?>">
            <?php else: ?>
                <span style="color: #6c757d;">Image non disponible</span>
            <?php endif; ?>
        </div>
        <div class="bike-content">
            <h3 class="bike-name"><?= htmlspecialchars($velo['nom']); ?></h3>
            <div class="bike-price"><?= number_format($velo['prix'], 2, ',', ' '); ?> €</div>
            <div class="bike-actions">
                <a href="?page=detailProduit&velo=<?= $velo['id']; ?>" class="btn btn-info">Plus d'infos</a>
                <a href="?page=commander" class="btn btn-order">Commander</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php else: ?>
    <p>Aucun vélo disponible pour le moment.</p>
<?php endif; ?>