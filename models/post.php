<?php

if (isset($_SESSION['user'])) {
    $author = $_SESSION['user']['username'];
}

function createPost($title, $komeraz, $id_users, $author) {
    {
        // Get the global PDO instance
        global $pdo;
        // Prepare the SQL query
        $query = $pdo->prepare("INSERT INTO posts (title, komeraz, id_users, author) VALUES (:t, :k, :i, :a)");
        // Bind the parameter values to the query placeholders
        $query->execute([
            "t" => $title,
            "k" => $komeraz,
            "i" => $id_users,
            "a" => $author
        ]);
        // Return true if the post is created successfully
        return true;
    } 
}

function getPosts() {
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM posts ORDER by id DESC");
    $query->execute();
    $posts = $query->fetchAll();
    return $posts;
}

?>