<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

    $name = $_POST['circle_name'];

    $idCircle = createCircle($name);
    $idUser = $_SESSION['id'];

    addUserToCircle($idUser, $idCircle);

header("Location: $BASE_URL" . "pages/circle/index.php?id=".$idCircle);
?>
