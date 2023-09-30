<?php

function register($username, $password) {
    global $pdo;
    $query = $pdo->prepare("INSERT INTO users (username, password) VALUES (:u, :p)");
    $query->execute([
        "u" => $username,
        "p" => password_hash($password, PASSWORD_DEFAULT)
    ]);
    return true;
}

?>