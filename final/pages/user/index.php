<?php
include_once('../../config/init.php');

if(isset($_SESSION['id'])){
    if(isset($_SESSION['admin'])){
        header("Location: $BASE_URL" . 'pages/admin/');
    }else {
        header("Location: $BASE_URL" . 'pages/user/feed.php');
    }
} else {
    $_SESSION['error_messages'][] = 'You need to be logged in';
    header("Location: $BASE_URL" . 'pages/auth/');
}

?>