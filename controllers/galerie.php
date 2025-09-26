<?php

require_once 'models/galerie.php';

$artworks = get_artworks($pdo);
$comments = get_comments($pdo);
$exhibitions = get_exhibitions($pdo);
$favorites = isset($_SESSION['user_id']) ? get_user_favorites($pdo, $_SESSION['user_id']) : [];

$pageTitle = "Galerie";
require_once "layouts/head.php";
require_once "layouts/header.php";
require_once "views/galerie.php";
require_once "layouts/footer.php";

?>