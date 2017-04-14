<?php
include_once('../config/init.php');
if(isset($_SESSION['email'])){
    header("Location: $BASE_URL" . 'pages/user/feed.php');
} else{
    header("Location: $BASE_URL" . 'pages/auth/');
}
?>