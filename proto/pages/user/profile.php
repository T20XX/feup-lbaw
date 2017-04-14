<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if ($_GET['id']) {
    $id = $_GET['id'];
} else {
    $id = $_SESSION['id'];
}

$info = getUserInfo($id);

$smarty->assign('info', $info);
$smarty->display('user/profile.tpl');
?>