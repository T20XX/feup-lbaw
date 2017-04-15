<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

if ($_GET['id']) {
    $id = $_GET['id'];
} else {
    $id = $_SESSION['id'];
}

$info = getUserInfo($id);
$image = getUserImage($id);

$smarty->assign('info', $info);
$smarty->assign('image', $image['path']);
$smarty->assign('cssPath', $BASE_URL . "css/profile.css");
$smarty->assign('jsPath', $BASE_URL . "javascript/profile.js");
$smarty->display('user/profile.tpl');
?>