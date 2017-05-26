<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/circle.php');

if(isset($_SESSION['id'])){
    if(!isset($_SESSION['admin'])){
            $idPost = $_GET['idPost'];
    }else {
        die(header("HTTP/1.0 404 Sender ID Error"));
    }
} else {
    die(header("HTTP/1.0 404 Sender ID Error"));
}

$comments = getCommentsOfPost($idPost);

echo json_encode($comments);
?>