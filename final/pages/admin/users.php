<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if(isset($_SESSION['id'])){
    if(isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/user/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

if($_GET['reported'] == true){
$users = fetchAllReportedUsers();
}
else if ($_GET['reported'] == false){
$users = fetchAllUsers();
}

$smarty->assign('users', $users);
$smarty->assign('jsPath', $BASE_URL . "javascript/admin/users.js");
$smarty->display('admin/users.tpl');
?>
