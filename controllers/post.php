<?php

function createKomeraz()
{
    global $baseUrl;
    if ($GLOBALS['logged']) {
        if ($_POST && $_POST['title'] && $_POST['komeraz']) {
            require('models/post.php');
            $post = createPost($_POST['title'], $_POST['komeraz'], $_SESSION['user']['id'], $_SESSION['user']['username']);
            if ($post) {
                // echo "Great success ma boi";
                header("Location: " . $baseUrl . "?p=home");
            } else {
                echo "Uh-Oooh";
            }
        }
        require("templates/newKomerage.php");
    } else {
        header("Location= " . $baseUrl . "?p=login");
    }
}

function getKomerazes()
{
    require('models/post.php');
    $posts = getPosts();
    require("templates/home.php");
}



?>