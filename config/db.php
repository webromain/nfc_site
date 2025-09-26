<?php
try {
    // Connexion à SQLite
    $pdo = new PDO("sqlite:db.db", 'root', 'root');
    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo "<div style='z-index: 1000000;'>Connexion réussie à SQLite !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage() . "</div>");
}
?>