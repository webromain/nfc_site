<?php

if (!isset($_SESSION["user_id"])) {
    header("Location: login");
    exit();
}

$pageTitle = "Profil";
require_once "layouts/head.php";
require_once "layouts/header.php";
require_once "views/profil.php";
require_once "layouts/footer.php";

?>