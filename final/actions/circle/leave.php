<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

    $idUser = $_SESSION['id'];
    $idCircle = $_POST['idCircle'];
    removeUserFromCircle($idUser, $idCircle);

header("Location: $BASE_URL" . "pages/user/feed.php");
?>