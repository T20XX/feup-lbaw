<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/admin.php');

if(isset($_SESSION['id'])){
    if(isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/user/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

if($_GET['reported'] == 'true' && $_GET['query']){
    $posts = fetchAllReportedPostsBySearch($_GET['query']);
}
else if($_GET['reported'] == 'true'){
    $posts = fetchAllReportedPosts();
}
else if($_GET['query']){
    $posts = fetchAllPostsBySearch($_GET['query']);
}
else {
    $posts = fetchAllPosts();
}

$smarty->assign('title', "Admin Circles");
$smarty->assign('posts', $posts);
$smarty->assign('path', $path);
$smarty->assign('jsPath', $BASE_URL . "javascript/admin/posts.js");
$smarty->display('admin/posts.tpl');

?>
