<?php
function handle_login()
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        require_once "models/user.php";

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = login($pdo, ["email" => $email]);
        $token = bin2hex(random_bytes(16)); // Génère un token de 32 caractères hexadécimaux


        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["prenom"] = $user["prenom"];
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["sexe"] = $user["sexe"];
            $_SESSION["phone"] = $user["phone"];
            $_SESSION["address"] = $user["address"];
            $_SESSION["token"] = $user["token"];
            $_SESSION["is_admin"] = $user["is_admin"];
            header("Location: profil");
            exit();
        } else {
            echo "Identifiants incorrects";
            return;
        }
    }
    $pageTitle = "Login";
    require_once "layouts/head.php";
    require_once "layouts/header.php";
    require_once "views/login.php";
}

handle_login();

?>