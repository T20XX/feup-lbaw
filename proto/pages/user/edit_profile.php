<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if ($_GET['id']) {
    $id = $_GET['id'];
} else {
    $id = $_SESSION['id'];
}

$info = getUserInfo($id);
$email = getUserEmail($id);
$image = getUserImage($id);

$smarty->assign('info', $info);
$smarty->assign('email', $email['email']);
$smarty->assign('image', $image['path']);
$smarty->display('user/edit_profile.tpl');
?>