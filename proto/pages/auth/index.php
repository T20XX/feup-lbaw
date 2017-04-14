<?php
include_once('../../config/init.php');
if (isset($_SESSION['email'])){
    header("Location: $BASE_URL");
}else{
    $smarty->display('auth/homepage.tpl');
}
?>
