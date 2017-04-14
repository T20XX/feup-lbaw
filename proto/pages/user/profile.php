<?php
include_once('../../config/init.php');

if (!$_GET['id']) {
    $id = $_GET['id'];
    $info = getUserInfoFromID($id);
} else {
    $info = getUserInfoFromEmail($EMAIL);
}

$smarty->assign('info', $info);
$smarty->display('user/profile.tpl');
?>