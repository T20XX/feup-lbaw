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

$id = $_SESSION['id'];

$info = getUserInfo($id);
$image = getUserImage($id);
$circles = getUserCircles($id);
$invites = getUserInvites($id);

$smarty->assign('isSelfProfile', $isSelfProfile);
$smarty->assign('info', $info);
$smarty->assign('image', $image['path']);
$smarty->assign('circles', $circles);
$smarty->assign('invites', $invites);
$smarty->assign('cssPath', $BASE_URL . "css/user/invites.css");
$smarty->assign('jsPath', $BASE_URL . "javascript/user/invites.js");
$smarty->display('user/invites.tpl');
?>