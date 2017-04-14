<?php
include_once('../../config/init.php');
if(isset($_SESSION['id'])){
    header("Location: $BASE_URL" . 'pages/user/feed.php');
} else{
    header("Location: $BASE_URL" . 'pages/auth/');
}
?>