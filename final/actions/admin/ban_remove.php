<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin.php');

if($_POST['idUser'] != ''){
    $id = $_POST['idUser'];
    $reason = $_POST['reason'];
    addBan($id, $reason);
    header("Location: $BASE_URL" . "pages/admin/users.php");
}
else if($_POST['idCircle'] != ''){
    $id = $_POST['idCircle'];
    deleteCircle($id);
    header("Location: $BASE_URL" . "pages/admin/circles.php");
}
else if($_POST['idPost']){
    $id = $_POST['idPost'];
    deletePost($id);
    header("Location: $BASE_URL" . "pages/admin/posts.php");
}




?>
