<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BluMaremma | Prodotti</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/prodotti.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'header.php'; ?>

<!-- HERO SECTION -->
<section class="hero-pescato">
    <div>
        <h1>Pescato Locale</h1>
        <h2>Freschezza e tradizione dal nostro mare</h2>
    </div>
</section>

<!-- PRODUCTS -->
<div class="product-section">
    <!-- Prodotto 1 -->
    <div class="product-row">
    <div class="image-container" 
         style="background-image: url('img/tonnopinnagialla.jpg')"></div>
    <div class="text-container">
        <h2 class="product-title">Tonno Pinna Gialla</h2>
        <p class="product-description">
            Il tonno pinna gialla è un pesce pregiato, noto per la sua carne soda e saporita. 
            Viene catturato con metodi sostenibili e selezionato per offrire la massima freschezza e qualità.
        </p>
    </div>
</div>

    <!-- Prodotto 2 -->
<div class="product-row">
    <div class="image-container" 
         style="background-image: url('img/salmone1.jpg')"></div>
    <div class="text-container">
        <h2 class="product-title">Salmone</h2>
        <p class="product-description">
            Il salmone fresco è un pesce ricco di sapore, noto per la sua carne tenera e ricca di omega-3. Catturato in acque cristalline, il nostro salmone proviene da metodi di pesca sostenibili che rispettano l’ambiente marino. Ogni pezzo è scelto con cura per garantire freschezza e qualità in ogni piatto.
        </p>
    </div>
</div>

<!-- Prodotto 3 -->
<div class="product-row">
    <div class="image-container" 
         style="background-image: url('img/gamberetti.jpg')"></div>
    <div class="text-container">
        <h2 class="product-title">Gamberetti</h2>
        <p class="product-description">
            I nostri gamberetti freschi sono selezionati con cura per offrire un sapore delicato e una carne tenera. Catturati in mare aperto con tecniche sostenibili, i gamberetti mantengono tutta la loro freschezza e qualità, ideali per preparazioni gourmet o piatti semplici e gustosi.
        </p>
    </div>
</div>

<!-- Prodotto 4 -->
<div class="product-row">
    <div class="image-container" 
         style="background-image: url('img/granchio.jpg')"></div>
    <div class="text-container">
        <h2 class="product-title">Granchio Blu</h2>
        <p class="product-description">
            Il granchio blu è una prelibatezza marina dal sapore ricco e delicato. Catturato in modo sostenibile, questo granchio è famoso per la sua carne tenera e succulenta, perfetta per piatti raffinati o per essere gustato semplicemente con una spruzzata di limone.
        </p>
    </div>
</div>

</div>

<?php include 'footer.php'; ?>
<script src="script.js"></script>
</body>
</html>
