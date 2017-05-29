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
    $_SESSION['error_messages'][] = 'You need to be logged in';
    header("Location: $BASE_URL" . 'pages/auth/');
}


$id = $_SESSION['id'];

$recentMessagesUsers = getRecentMessagesUsers($id);
$invites = getUserInvites($id);
$circles = getUserCircles($id);
$posts = getPostsForFeed($id);

$lastPostId = 0;
$lastPostId = end($posts)['idPost'];

$smarty->assign('recentMessagesUsers_aux', $recentMessagesUsers);
$smarty->assign('invites_aux', $invites);
$smarty->assign('circles_aux', $circles);

$smarty->assign('posts.json_agg', json_decode($posts.json_agg));
$smarty->assign('posts', $posts);
$smarty->assign('lastPostId', $lastPostId);
$smarty->assign('userId', $id);

$smarty->assign('title', "Feed");
$smarty->assign('jsPath', $BASE_URL . "javascript/user/feed.js");

$smarty->assign('cssPath', $BASE_URL . "css/user/feed.css");
$smarty->display('user/feed.tpl');
?>
