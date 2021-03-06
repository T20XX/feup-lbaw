<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/user.php');


if(isset($_SESSION['id'])){
    if(!isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/admin/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

$info = getUserInfo($id);
$email = getUserEmail($id);
$image = getUserImage($id);

$smarty->assign('title', "Edit Profile");
$smarty->assign('info', $info);
$smarty->assign('email', $email['email']);
$smarty->assign('image', $image['path']);
$smarty->assign('cssPath', $BASE_URL . "css/user/edit_profile.css");
$smarty->assign('jsPath', $BASE_URL . "javascript/user/edit_profile.js");
$smarty->display('user/edit_profile.tpl');
?>