<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/auth.php');

if (!$_GET['id']) {
    $id = $_GET['id'];
    $info = getUserInfoFromID($id);
} else {
    $info = getUserInfoFromEmail($_SESSION['email']);
}

$smarty->assign('info', $info);
$smarty->display('user/profile.tpl');
?>