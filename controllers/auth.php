<?php

function showLogin() {
    global $baseUrl;
    if ($_POST && $_POST['username'] && $_POST['password']) {
        require("models/login.php");
        $connected = login($_POST['username'], $_POST['password']);
        if ($connected)
            header("Location: " . $baseUrl . "?p=home");
        else {
            echo "Uh-Oh!";
        }
    }
    require("templates/login.php");
}

function showRegister() {
    if ($_POST && $_POST['username'] && $_POST['password']) {
        require("models/join.php");
        $user = register($_POST['username'], $_POST['password']);
        if ($user)
            echo "Great success, " . $_POST['username'];
        else {
            echo "Uh-Oh!";
        }
    }
    require("templates/join.php");
}

?>