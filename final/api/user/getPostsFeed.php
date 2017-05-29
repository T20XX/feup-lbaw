<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/user.php');

if (isset($_SESSION['id'])) {
    if (!isset($_SESSION['admin'])) {
        if ($_GET['idPost']) {
            $idPost = $_GET['idPost'];
            $userId = $_GET['userId'];

            $posts = getMorePostsFeed($idPost, $userId);
            echo json_encode($posts);
        }
    } else {
        die(header("HTTP/1.0 404 Post Not Found"));
    }
}
?>