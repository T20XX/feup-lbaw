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

if($_GET['reported'] == 'true'){
    $circles = fetchAllReportedCircles();
}
else {
    $circles = fetchCircleInfo();
}

    $smarty->assign('title', "Admin Circles");
    $smarty->assign('circles', $circles);
    $smarty->assign('path', $path);
    $smarty->assign('jsPath', $BASE_URL . "javascript/admin/circles.js");
    $smarty->display('admin/circles.tpl');

?>
