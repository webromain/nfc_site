<?php
function handle_register()
{

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        ["nom" => $nom, "prenom" => $prenom, "sexe" => $sexe, "email" => $email, "password" => $password] = $_POST;
        require_once 'models/user.php';

        try {
            $newUser = createUser($pdo, [
                "nom" => $nom,
                "prenom" => $prenom,
                "sexe" => $sexe,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT)
            ]);

            if ($newUser) {
                header("Location: login");
                exit();
            } else {
                echo "Erreur lors de la création de l'utilisateur.";
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
    $pageTitle = "Register";
    require_once "layouts/head.php";
    require_once "layouts/header.php";
    require_once "views/register.php";
}

handle_register();

?>