<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

if (isset($_SESSION['id'])) {
    if (isset($_SESSION['admin'])) {
        header("Location: $BASE_URL" . 'pages/admin/');
    } else {
        if ($_POST['circle_name']) {
            $name = $_POST['circle_name'];

            $idCircle = createCircle($name);
            $idUser = $_SESSION['id'];

            addUserToCircle($idUser, $idCircle);

            header("Location: $BASE_URL" . "pages/circle/index.php?id=" . $idCircle);
        } else {
            $_SESSION['error_messages'][] = 'Circle needs a name';
            header("Location: $BASE_URL" . "pages/user/feed.php");
        }
    }
} else {
    $_SESSION['error_messages'][] = 'You need to be logged in';
    header("Location: $BASE_URL" . 'pages/auth/');
}
?>
