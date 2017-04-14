<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/auth.php');

if ($_GET['id']) {
    $id = $_GET['id'];
} else {
    $id = $_SESSION['id'];
}

$info = getUserInfoFromID($id);

$smarty->assign('info', $info);
$smarty->display('user/profile.tpl');
?>