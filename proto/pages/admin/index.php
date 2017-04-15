<?php
include_once('../../config/init.php');

if(isset($_SESSION['id'])){
    if(isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/user/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

$smarty->assign('cssPath', $BASE_URL . "");
$smarty->assign('jsPath', $BASE_URL . "");
$smarty->display('admin/dashboard.tpl');
?>
