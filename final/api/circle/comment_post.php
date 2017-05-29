<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

if (isset($_SESSION['id'])) {
    if (!isset($_SESSION['admin'])) {
        if ($_GET['idPost']) {
            if ($_GET['content']) {
                $idUser = $_SESSION['id'];
                $idPost = $_GET['idPost'];
                $content = $_GET['content'];

                addCommentToPost($idPost, $idUser, $content);
            } else {
            }
        } else {
        }
    } else {
    }
}


?>