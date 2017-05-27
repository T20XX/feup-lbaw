<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/circle.php');

if(isset($_SESSION['id'])){
    if(!isset($_SESSION['admin'])){
        $idComment = $_GET['idComment'];
    }else {
        die(header("HTTP/1.0 404 Sender ID Error"));
    }
} else {
    die(header("HTTP/1.0 404 Sender ID Error"));
}

$replies = getRepliesOfComment($idComment);

echo json_encode($replies);
?>