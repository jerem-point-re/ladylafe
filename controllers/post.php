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

function getKomeraz($id)
{
    require('models/post.php');
    require_once('models/comment.php');
    $post = getPost($id);

    $comments = getComments($id);
    global $baseUrl;
    if ($_POST && $_POST['comment']) {
        createComment($_POST['comment'], $_SESSION['user']['id'], $id);
        header("Location: $baseUrl?p=unKomeraz&id=" . $_GET['id']);
        echo "Yeah, that works biche!";
    }

    if (sizeof($post)) {
        $post = $post[0];
        require("templates/unKomeraz.php");
    } else {
        // echo "Uh-Oooh";
        header("Location: " . $baseUrl . "?p=home");
    }
}


?>