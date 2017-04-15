<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');


if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

$info = getUserInfo($id);
$email = getUserEmail($id);
$image = getUserImage($id);

$smarty->assign('info', $info);
$smarty->assign('email', $email['email']);
$smarty->assign('image', $image['path']);
$smarty->assign('cssPath', $BASE_URL . "css/edit_profile.css");
$smarty->assign('jsPath', $BASE_URL . "javascript/edit_profile.js");
$smarty->display('user/edit_profile.tpl');
?>