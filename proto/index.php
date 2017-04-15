<?php
include_once('../../config/init.php');
    if(isset($_SESSION['email']) && !isset($_SESSION['admin'])){
        header("Location: $BASE_URL" . 'pages/user/feed.php');
    } else if (isset($_SESSION['admin']) && $_SESSION['admin'] != -1){
	header("Location: $BASE_URL".'pages/admin');
    }
	else {
        header("Location: $BASE_URL" . 'pages/auth/');
    }
?>
