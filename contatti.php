<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BluMaremma | Contatti</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index_animazioni.css">
    <link rel="stylesheet" href="contatti.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Logo e Menu Toggle -->
    <div class="header-elements" id="headerElements">
        <picture>
            <source srcset="img/logo.webp" type="image/webp">
            <source srcset="img/logo.jpg" type="image/jpeg"> 
            <img src="img/logo.jpg" alt="Blu Maremma" class="logo">
        </picture>
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <!-- Menu Links -->
    <div class="menu-links" id="menuLinks">
        <a href="index.html">Home</a>
        <a href="prodotti.html">Prodotti</a>
        <a href="sostenibilita.html">Sostenibilità</a>
        <a href="contatti.php">Contatti</a>
    </div>

    <!-- Hero Section per la Pagina Contatti -->
    <section class="hero">
        <div class="hero-text">
            <h1>Contattaci</h1>
            <p>Hai domande o richieste? Siamo a tua disposizione!</p>
        </div>
    </section>

    <!-- Modulo di Contatto -->
    <section class="contact-form">
        <div class="form-container">
            <h2>Scrivici un messaggio</h2>
            <form action="processa_contatto.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="messaggio">Messaggio:</label>
                    <textarea id="messaggio" name="messaggio" rows="6" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Invia</button>
                </div>
            </form>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
