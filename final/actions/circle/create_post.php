<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

$idUser = $_SESSION['id'];
$idCircle = $_POST['idCircle'];
$content = $_POST['content'];

$idPost = createPost($idUser, $idCircle, $content);
if (!empty($_FILES['post_photo']['name'])) {
    $image_path = $BASE_DIR . "resources/circles/" . $id;
    $image_url = $BASE_URL . "resources/circles/" . $id;


    if (move_uploaded_file($_FILES['post_photo']['tmp_name'], $image_path)) {
            addImagetoPost($idPost, $image_url);
    } else {

    }
}
header("Location: $BASE_URL" . "pages/circle/index.php?id=".$idCircle);
?>
