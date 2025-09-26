<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    require_once 'config/db.php';

    $artwork_id = $_POST['artwork_id'];
    $user_id = $_SESSION['user_id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM favorites WHERE user_id = :user_id AND artwork_id = :artwork_id");
        $stmt->execute(['user_id' => $user_id, 'artwork_id' => $artwork_id]);

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