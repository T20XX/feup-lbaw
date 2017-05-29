<?php
include_once('../../config/init.php');
if (isset($_SESSION['id'])){
    header("Location: $BASE_URL" . 'pages/user/index.php');
}else{

    //$_SESSION['id'] = -1;
    //$_SESSION['admin'] = -1;
    //$_SESSION['email'] = -1;
    $smarty->display('auth/homepage.tpl');


}
?>
