<?php
include_once('../../config/init.php');
    if(isset($_SESSION['email'])){
        header('Location: pages/user/feed.php');
    } else{
        header('Location: pages/auth/');
    }
?>
