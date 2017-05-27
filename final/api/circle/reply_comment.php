<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

if (isset($_SESSION['id'])) {
    if (!isset($_SESSION['admin'])) {
        if ($_GET['idComment']) {
            $idUser = $_SESSION['id'];
            $idComment = $_GET['idComment'];
            $content = $_GET['content'];
            addReply($idUser, $idComment, $content);
        }
    } else {
        die(header("HTTP/1.0 404 Post Not Found"));
    }
}
?>