<a href="?page=produits" class="back-link">← Retour aux produits</a>

<div class="product-detail">
    <div class="product-images">
        <div class="main-image">
            <?php if (!empty($velo['photo'])): ?>
                <img src="view/images/<?= htmlspecialchars($velo['photo']); ?>" alt="<?= htmlspecialchars($velo['nom']); ?>">
            <?php else: ?>
                <span style="color: #6c757d; font-size: 2rem;">Image non disponible</span>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="product-info">
        <h1 class="product-name"><?= htmlspecialchars($velo['nom']); ?></h1>
        <div class="product-price"><?= number_format($velo['prix'], 2, ',', ' '); ?> €</div>
        
        <div class="product-description">
            <h3>Description détaillée</h3>
            <?= nl2br(htmlspecialchars($velo['description'])); ?>
        </div>
        
        <div>
            <a href="?page=commander" class="order-btn">Commander ce vélo</a>
        </div>
    </div>
</div>