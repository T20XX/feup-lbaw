<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');


if (isset($_SESSION['id'])) {
    if (isset($_SESSION['admin'])) {
        header("Location: $BASE_URL" . 'pages/admin/');
    } else {
        if ($_POST['idCircle']) {
            if (doesCircleExists($_POST['idCircle'])) {
                if (isUserCircle($_SESSION['id'], $_POST['idCircle'])) {


                    $idUser = $_SESSION['id'];
                    $idCircle = $_POST['idCircle'];
                    $content = $_POST['content'];

                    $idPost = createPost($idUser, $idCircle, $content);

                    if (!empty($_FILES['post_photo']['name'])) {
                        $image_path = $BASE_DIR . "resources/circles/" . $idPost;
                        $image_url = $BASE_URL . "resources/circles/" . $idPost;

                        if (move_uploaded_file($_FILES['post_photo']['tmp_name'], $image_path)) {
                            addImagetoPost($idPost, $image_url);
                        }
                    }
                    header("Location: $BASE_URL" . "pages/circle/index.php?id=" . $idCircle);
                } else {
                    $_SESSION['error_messages'][] = 'You dont belong to this Circle';
                    header("Location: $BASE_URL" . "pages/user/feed.php");
                }
            } else {
                $_SESSION['error_messages'][] = 'Circle does not exist.';
                header("Location: $BASE_URL" . "pages/user/feed.php");
            }
        } else {
            $_SESSION['error_messages'][] = 'Invalid Circle';
            header("Location: $BASE_URL" . "pages/user/feed.php");
        }
    }
} else {
    $_SESSION['error_messages'][] = 'You need to be logged in';
    header("Location: $BASE_URL" . 'pages/auth/');
}
?>
