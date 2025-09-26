<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    require_once 'config/db.php';

    $artwork_id = $_POST['artwork_id'];
    $user_id = $_SESSION['user_id'];

    try {
        // Vérifier si le favori existe déjà
        $stmt = $pdo->prepare("SELECT * FROM favorites WHERE user_id = :user_id AND artwork_id = :artwork_id");
        $stmt->execute(['user_id' => $user_id, 'artwork_id' => $artwork_id]);
        $favorite = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$favorite) {
            // Ajouter le favori
            $stmt = $pdo->prepare("INSERT INTO favorites (user_id, artwork_id) VALUES (:user_id, :artwork_id)");
            $stmt->execute(['user_id' => $user_id, 'artwork_id' => $artwork_id]);
        }

        header('Location: galerie');
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    header('Location: galerie');
    exit();
}
?>