<?php
include_once('../../config/init.php');

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

$smarty->assign('cssPath', $BASE_URL . "css/feed.css");
$smarty->assign('jsPath', $BASE_URL . "javascript/feed.js");
$smarty->display('user/feed.tpl');
?>
