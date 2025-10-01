<div class="form-container">
    <h1 class="form-title">Commander un vélo</h1>
    
    <?php if (isset($success)): ?>
        <div class="message success"><?= $success; ?></div>
    <?php endif; ?>
    
    <?php if (isset($error)): ?>
        <div class="message error"><?= $error; ?></div>
    <?php endif; ?>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="velo_id">Choisissez votre vélo *</label>
            <select name="velo_id" id="velo_id" required>
                <option value="">-- Sélectionnez un vélo --</option>
                <?php foreach ($velos as $velo): ?>
                    <option value="<?= $velo['id']; ?>">
                        <?= htmlspecialchars($velo['nom']); ?> - <?= number_format($velo['prix'], 2, ',', ' '); ?> €
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        
        <div class="form-group">
            <label for="prenom">Prénom *</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="message">Message / Questions *</label>
            <textarea id="message" name="message" required placeholder="Envoyer nous un messaes"></textarea>
        </div>
        
        <button type="submit" class="submit-btn">Envoyer ma commande</button>
    </form>
</div>