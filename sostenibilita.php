<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BluMaremma | Sostenibilità</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index_animazioni.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sostenibilita.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include('header.php'); ?>

<!-- Hero Section -->
<div class="hero-banner" style="background: url('img/sostenibilita.jpg') no-repeat center center; background-size: cover;">
    <h1 class="hero-title">Sostenibilità</h1>
</div>

<section class="padded-section" style="padding: 4rem 0; background-color: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="half-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div class="content" style="max-width: 600px; animation: fadeInContent 1s ease-out forwards;">
                <h2 class="section-title" style="font-family: 'Arial', sans-serif; font-size: clamp(2rem, 5vw, 3rem); color: #0D3A5B; margin-bottom: 1rem; font-weight: 700; line-height: 1.2;">Il nostro impegno Green</h2>
                <p class="highlighted-text" style="font-size: 1.2rem; font-weight: bold; color: #0D3A5B; margin: 1rem 0; animation: fadeInText 1.5s ease-out forwards; animation-delay: 0.5s;">Un approccio responsabile alla produzione ittica</p>
                <p style="color: #555; font-size: 1rem; line-height: 1.8; margin-bottom: 1.5rem; animation: fadeInText 1.5s ease-out forwards; animation-delay: 1s;">
                    Nella nostra filosofia produttiva:
                </p>

                <p style="color: #555; font-size: 1rem; line-height: 1.0; margin-bottom: 1.5rem; animation: fadeInText 1.5s ease-out forwards; animation-delay: 1s;">
                - Riduzione impatto ambientale
                </p>
                <p style="color: #555; font-size: 1rem; line-height: 1.0; margin-bottom: 1.5rem; animation: fadeInText 1.5s ease-out forwards; animation-delay: 1s;">
                - Ottimizzazione risorse
                </p>
                <p style="color: #555; font-size: 1rem; line-height: 1.0; margin-bottom: 1.5rem; animation: fadeInText 1.5s ease-out forwards; animation-delay: 1s;">
                - Attenzione all'ecosistema marino
                </p>
            </div>
            <div class="image-container" style="position: relative; overflow: hidden; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                <img src="img/barche.jpg" alt="Produzione sostenibile" class="responsive-img" style="width: 100%; height: auto; transition: transform 0.3s ease;">
            </div>
        </div>
    </div>
</section>

<style>
    /* Animazione per il fade in del contenuto */
    @keyframes fadeInContent {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Animazione per il fade in del testo */
    @keyframes fadeInText {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Effetto hover per l'immagine */
    .responsive-img:hover {
        transform: scale(1.05); /* Zoom sull'immagine */
    }
</style>


<!-- Cards Sostenibilità -->
<section class="cards-section padded-section">
    <div class="container">
        <div class="cards">
            <div class="card">
                <i class="fas fa-water fa-3x text-blue"></i>
                <h3>Gestione Acqua</h3>
                <p>Sistemi di riciclo e depurazione delle acque di lavorazione</p>
            </div>

            <div class="card">
                <i class="fas fa-recycle fa-3x text-blue"></i>
                <h3>Economia Circolare</h3>
                <p>Riuso degli scarti di produzione per altri settori industriali</p>
            </div>

            <div class="card">
                <i class="fas fa-ship fa-3x text-blue"></i>
                <h3>Logistica Ottimizzata</h3>
                <p>Pianificazione intelligente dei trasporti per ridurre emissioni</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Semplice -->
<div class="padded-section bg-light-gray text-center">
    <div class="container">
        <h3>Vuoi saperne di più sulle nostre pratiche sostenibili?</h3>
        <a href="contatti.php" class="cta-button">Contattaci</a>
    </div>
</div>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
