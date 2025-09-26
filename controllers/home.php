<?php

if (!isset($_SESSION["user_id"])) {
    header("Location: login");
    exit();
}

$pageTitle = "Home";
require_once "layouts/head.php";
require_once "layouts/header.php";
require_once "views/home.php";
require_once "layouts/footer.php";

?>