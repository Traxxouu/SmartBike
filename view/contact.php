<div class="contact-page">

    <h1>Contactez-nous</h1>
    
    <div class="contact-grid">
        <div class="contact-form">
            <h2>Envoyez-nous un message</h2>
            
            <?php if (isset($success)): ?>
                <div class="message success"><?= $success; ?></div>
            <?php endif; ?>
            
            <?php if (isset($error)): ?>
                <div class="message error"><?= $error; ?></div>
            <?php endif; ?>
            
            <form method="POST" action="">
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
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required placeholder="Votre message..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Envoyer</button>
            </form>
        </div>
        
        <div class="contact-info">
            <h2>Informations</h2>
            
            <div class="info-item">
                <h3>Adresse</h3>
                <p><strong>Adresse :</strong> Efrei Paris Villejuif, France</p>
            </div>
            
            <div class="info-item">
                <h3>Téléphone</h3>
                <p>+33 1 23 45 67 89</p>
            </div>
            
            <div class="info-item">
                <h3>Email</h3>
                <p>emailsmartbike@gmail.com</p>
            </div>
        
        </div>
    </div>
    
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2399.293273590308!2d2.3639276759865293!3d48.789291155567405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673d0937ba945%3A0x63829c5f9fb306a!2sEfrei%20Paris%20Panth%C3%A9on-Assas%20Universit%C3%A9%20-%20Campus%20Gorki!5e1!3m2!1sfr!2sfr!4v1759329680358!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>