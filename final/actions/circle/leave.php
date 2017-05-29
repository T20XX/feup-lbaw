<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');


if (isset($_SESSION['id'])) {
    if (isset($_SESSION['admin'])) {
        header("Location: $BASE_URL" . 'pages/admin/');
    } else {
        if (doesCircleExists($_POST['idCircle'])) {
            if (isUserCircle($_SESSION['id'], $_POST['idCircle'])) {
                $idUser = $_SESSION['id'];
                $idCircle = $_POST['idCircle'];
                removeUserFromCircle($idUser, $idCircle);

                header("Location: $BASE_URL" . "pages/user/feed.php");
            } else {
                $_SESSION['error_messages'][] = 'You dont belong to this circle';
                header("Location: $BASE_URL" . "pages/user/feed.php");
            }
        } else {
            $_SESSION['error_messages'][] = 'Circle doesnt exist';
            header("Location: $BASE_URL" . "pages/user/feed.php");
        }
    }
}
else {
    $_SESSION['error_messages'][] = 'You need to be logged in';
    header("Location: $BASE_URL" . 'pages/auth/');
}

?>