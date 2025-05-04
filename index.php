<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BluMaremma | Eccellenza Ittica</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index_animazioni.css">
    <link rel="stylesheet" href="css/chisiamo.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
    .hero {
    background: url('img/tonno1.jpg') no-repeat center center;
    background-size: cover;
    height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}
</style>

</head>
<body>
    
<?php include('header.php'); ?>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>BLUMAREMMA:<br>Il tonno, come deve essere</h1>
            <p>Pescato nel Tirreno con metodi sostenibili, lavorato rispettando la tradizione italiana.</p>
            <a href="#" class="btn">Scopri i nostri prodotti</a>
        </div>
    </section>

    <?php include('chisiamo.php'); ?>
    <?php include ('footer.php'); ?>

    <script src="script.js"></script>
</body>
</html>
