<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BluMaremma | Contatti</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index_animazioni.css">
    <link rel="stylesheet" href="css/contatti.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .contact-hero {
            position: relative;
            background: url('img/tonno1.jpg') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 120px 20px 20px 50px;
            text-align: left;
        }
    </style>

</head>
<body>
    
<?php include('header.php'); ?>

    <!-- Hero Section con form incorporato -->
<section class="hero contact-hero">
    <div class="hero-overlay">
        <div class="hero-text">
            <h1>Contattaci</h1>
            <p>Hai domande o richieste? Siamo a tua disposizione!</p>

            <!-- Form incorporato -->
            <form class="hero-form" action="processa_contatto.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Il tuo nome" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="La tua email" required>
                </div>
                <div class="form-group">
                    <textarea name="messaggio" rows="4" placeholder="Il tuo messaggio" required></textarea>
                </div>
                <button type="submit" class="btn">Invia</button>
            </form>
        </div>
    </div>
</section>

    <?php include ('footer.php'); ?>

    <script src="script.js"></script>
</body>
</html>
