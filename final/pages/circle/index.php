<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/user.php');
include_once($BASE_DIR . 'database/circle.php');

if (!isset($_SESSION['id'])) {
    $_SESSION['error_messages'][] = 'You need to be logged in';
    header("Location: $BASE_URL" . 'pages/auth/');
}

$id = $_SESSION['id'];

if ($_GET['id']) {
    if (doesCircleExists($_GET['id'])) {
        $idCircle = $_GET['id'];
        if (isUserCircle($id, $idCircle) || isset($_SESSION['admin'])) {
            if ($_GET['post']) {
                $posts = getPostById($_GET['post']);
            } else {

                if ($_GET['query']) {
                    $posts = getSearchPostFromCircle($idCircle, $_GET['query']);
                } else {
                    $posts = getPostsFromCircle($idCircle);
                }
            }
            $circle = getCircleInfo($idCircle);
            $members = getCircleMembers($idCircle);
            $invites = getAllInvitesAndVoteInvites($_SESSION['id'],$idCircle);

            $smarty->assign('title', $circle['name']);
            $smarty->assign('members', $members);
            $smarty->assign('invites', $invites);
            $smarty->assign('posts', $posts);
            $smarty->assign('posts.json_agg', json_decode($posts . json_agg));
            $smarty->assign('circle', $circle);
            $smarty->assign('idCircle', $idCircle);
        } else {
            $_SESSION['error_messages'][] = 'You dont belong in this circle';
            header("Location: $BASE_URL" . "pages/user/feed.php");
        }
    } else {
        $_SESSION['error_messages'][] = 'Circle does not exist';
        header("Location: $BASE_URL" . "pages/user/feed.php");
    }
}
$smarty->assign('jsPath', $BASE_URL . "javascript/circle/index.js");
$smarty->display('circle/index.tpl');
?>
