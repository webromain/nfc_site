<?php

session_start();

// require_once "config/path.php";

function index()
{
    require_once "controllers/home.php";
}

function pageregister()
{
    require_once "controllers/register.php";
}

function pagelogin()
{
    require_once "controllers/login.php";
}

function pageprofil()
{
    require_once "controllers/profil.php";
}

function vikidia()
{
    require_once "controllers/vikidia.php";
}

function tchat()
{
    require_once "controllers/tchat.php";
}

function jeu()
{
    require_once "http://127.0.0.1:5500/";
}

$action = $_SERVER['REQUEST_URI'];
switch (substr(strtok($action, '?'), 1)) {
    case "":
        index();
        break;
    case "profil":
        pageprofil();
        break;
    case "login":
        pagelogin();
        break;
    case "register":
        pageregister();
        break;
    case "vikidia":
        vikidia();
        break;
    case "tchat":
        tchat();
        break;
    case "jeu":
        jeu();
        break;
    default:
        echo "404 - Page not found";
        break;
}
?>