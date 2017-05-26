<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

if (isset($_SESSION['id'])) {
    if (!isset($_SESSION['admin'])) {
        if ($_GET['idPost']) {
            $idUser = $_SESSION['id'];
            $idPost = $_GET['idPost'];

            updateUpvotePost($idUser, $idPost);
            echo(addUpvotePost($idUser, $idPost));
                die(header("HTTP/1.1 404 Post Not Found"));
            echo("success");
        }
    } else {
        die(header("HTTP/1.0 404 Post Not Found"));
    }
} else {
    die(header("HTTP/1.0 404 Post Not Found"));
}

?>