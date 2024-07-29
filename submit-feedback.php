<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NBV65X5K');</script>
    <!-- End Google Tag Manager -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Soumettre un retour - Envoyez-nous vos commentaires et suggestions pour améliorer notre service.">
    <title>Soumettre un Retour - Service de Réparation</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBV65X5K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <div class="container">
            <div class="logo">
                <img src="assets/images/logo.png" alt="Service de Réparation Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="pages/about.html">À Propos</a></li>
                    <li><a href="pages/contact.html">Contact</a></li>
                    <li><a href="pages/booking.html">Réservation</a></li>
                    <li><a href="pages/client.html">Espace Client</a></li>
                    <li><a href="pages/blog.html">Blog</a></li>
                    <li><a href="pages/privacy.html">Privacy</a></li>
                    <li><a href="pages/submit-feedback.html">Submit Feedback</a></li>
                    <li><a href="pages/terms.html">Terms</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Soumettre un Retour</h1>
                <p>Nous aimerions avoir vos commentaires pour améliorer notre service. Merci de prendre le temps de nous donner votre avis.</p>
            </div>
        </section>
        
        <section class="feedback-form">
            <div class="container">
                <form action="feedback_confirmation.html" method="post">
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="feedback">Votre Retour:</label>
                    <textarea id="feedback" name="feedback" rows="4" required></textarea>

                    <button type="submit" class="btn-main">Envoyer</button>
                </form>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 Service de Réparation. Tous droits réservés.</p>
            <div class="footer-links">
                <a href="pages/privacy.html">Politique de Confidentialité</a> | 
                <a href="pages/terms.html">Conditions Générales</a>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/scripts.js"></script>
</body>
</html>
