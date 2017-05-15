<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if (!$_POST['receiver']) {
    die(header("HTTP/1.0 405 Receiver ID Error"));
} else if(!$_POST['content'] || empty($_POST['content'])){
    die(header("HTTP/1.0 406 Empty or non-existing content"));
} else if(isset($_SESSION['id'])){
    if(!isset($_SESSION['admin'])){
        $sender = $_SESSION['id'];
    }else {
        die(header("HTTP/1.0 404 Sender ID Error"));
    }
} else {
    die(header("HTTP/1.0 404 Sender ID Error"));
}
$receiver = $_POST['receiver'];
$content = $_POST['content'];

addMessage($content, $sender, $receiver);


?>