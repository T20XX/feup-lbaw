<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/admin.php');

if(isset($_SESSION['id'])){
    if(isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/user/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

$nUsers = getUsersCount();
$nCircles = getCirclesCount();
$nPosts = getPostsCount();
$nImages = getImagesCount();

$smarty->assign('nUsers', $nUsers);
$smarty->assign('nCircles', $nCircles);
$smarty->assign('nPosts', $nPosts);
$smarty->assign('nImages', $nImages);
$smarty->assign('cssPath', $BASE_URL . "");
$smarty->assign('jsPath', $BASE_URL . "");
$smarty->display('admin/dashboard.tpl');
?>
