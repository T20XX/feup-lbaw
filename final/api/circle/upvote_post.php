<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

if (isset($_SESSION['id'])) {
    if (!isset($_SESSION['admin'])) {
        if ($_GET['idPost']) {
            $idUser = $_SESSION['id'];
            $idPost = $_GET['idPost'];

            if (!upvotePost($idUser, $idPost))
                die(header("HTTP/1.0 404 Post Not Found"));
        }
    } else {
        die(header("HTTP/1.0 404 Post Not Found"));
    }
} else {
    die(header("HTTP/1.0 404 Post Not Found"));
}

?>