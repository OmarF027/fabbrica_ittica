<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data to prevent XSS or injection attacks
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $messaggio = htmlspecialchars(trim($_POST['messaggio']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Indirizzo email non valido.";
        exit;
    }

    // Verifica che i campi non siano vuoti
    if (empty($nome) || empty($email) || empty($messaggio)) {
        echo "Tutti i campi sono obbligatori.";
        exit;
    }

    // Creazione del contenuto da scrivere nel file .txt
    $content = "Nome: $nome\nEmail: $email\nMessaggio:\n$messaggio\n\n";

    // Percorso del file .txt (assicurati che la cartella abbia i permessi giusti per scrivere)
    $file = 'contatti.txt';

    // Scrivi nel file
    if (file_put_contents($file, $content, FILE_APPEND)) {
        echo "Messaggio salvato correttamente!";
    } else {
        echo "Si è verificato un errore nel salvataggio del messaggio.";
    }
}
?>
