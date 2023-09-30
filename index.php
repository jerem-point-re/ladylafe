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
            showKomerazes();
            break;
    }
} else {
    require('controllers/post.php');
    showKomerazes();
}