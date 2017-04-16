<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if(isset($_SESSION['id'])){
    if(!isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/admin/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

if ($_GET['id']) {
    $id = $_GET['id'];
    if($id == $_SESSION['id']){
        $isSelfProfile = true;
    } else {
        $isSelfProfile = false;
    }
} else {
    $id = $_SESSION['id'];
    $isSelfProfile = true;
}

$info = getUserInfo($id);
$image = getUserImage($id);
$circles = getUserCircles($id);

$smarty->assign('isSelfProfile', $isSelfProfile);
$smarty->assign('info', $info);
$smarty->assign('image', $image['path']);
$smarty->assign('cssPath', $BASE_URL . "css/user/profile.css");
$smarty->assign('jsPath', $BASE_URL . "javascript/user/profile.js");
$smarty->assign('circles', $circles);
$smarty->display('user/profile.tpl');
?>