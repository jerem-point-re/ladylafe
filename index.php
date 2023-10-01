<?php

session_start();
global $baseUrl;

$baseUrl = "http://localhost/etiennev/ladylafe/";

$GLOBALS['logged'] = $_SESSION && $_SESSION['user'];

require("models/db.php");

if (isset($_GET['p'])) {
    switch ($_GET['p']) {

        case 'newKomerage':
            require('controllers/post.php');
            createKomeraz();
            break;

        case 'unKomeraz':
            if (isset($_GET['id'])) {
                require("controllers/post.php");
                getKomeraz($_GET['id']);
            } else {
                header("Location: $baseUrl");
            }
            break;

        case 'login':
            require('controllers/auth.php');
            showLogin();
            break;

        case 'join':
            require('controllers/auth.php');
            showRegister();
            break;

        case 'logout':
            session_destroy();
            header("Location: " . $baseUrl . "?p=home");
            break;

        default:
            require('controllers/post.php');
            getKomerazes();
            break;
    }
} else {
    require('controllers/post.php');
    getKomerazes();
}