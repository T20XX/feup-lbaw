<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if(isset($_SESSION['id'])){
    if(!isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/admin/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

$id = $_SESSION['id'];

$recentMessagesUsers = getRecentMessagesUsers($id);
$invites = getUserInvites($id);

$smarty->assign('invites', $invites);
$smarty->assign('recentMessagesUsers', $recentMessagesUsers);

$smarty->assign('cssPath', $BASE_URL . "css/user/feed.css");
$smarty->assign('jsPath', $BASE_URL . "javascript/user/feed.js");
$smarty->display('user/feed.tpl');
?>
