<?php
function login($username, $password) {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM users WHERE username = :u");
    $query->execute([
        "u" => $username
    ]);
    
    $user = $query->fetch();
    
    if ($user && password_verify($password, $user["password"])) {
    
        // print_r($user);
        $_SESSION["user"] = $user;
    
        return true;
    }
    
    return false;
}

?>