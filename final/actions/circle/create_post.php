<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

$idCircle = $_GET['id'];
$idUser = $_SESSION['id'];
$content = $_POST['content'];
$path = $_POST['post_photo'];

$idPost = createPost($idUser, $idCircle, $content);
addImagetoPost($idPost, $path);
header("Location: $BASE_URL" . "pages/circle/index.php?id=".$idCircle);
?>
