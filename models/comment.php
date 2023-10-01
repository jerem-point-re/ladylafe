<?php
function createComment($comment, $id_users, $id_posts)
{
    global  $pdo;
    $query = $pdo ->prepare("INSERT INTO comments (comment, id_users, id_posts) VALUES (:c, :u, :p)");
    $query->execute([
        "c" => $comment,
        "u" => $id_users,
        "p" => $id_posts
    ]);
    return true;
}

function getComments($id_posts)
{
    global $pdo;
    $query = $pdo ->prepare("SELECT * FROM comments WHERE id_posts = :i ORDER BY id DESC");
    $query->execute([
        "i" => $id_posts
    ]);
    $comment = $query->fetchAll();
    return $comment;
}