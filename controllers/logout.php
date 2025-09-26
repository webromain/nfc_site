<?php
function logout()
{
    session_start();      // démarrer la session
    $_SESSION = [];       // vider toutes les variables de session
    session_destroy();    // détruire la session
    header('Location: /login'); // rediriger
    exit();
}

logout();
