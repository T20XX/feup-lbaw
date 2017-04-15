<?php
include_once('../../config/init.php');
if(isset($_SESSION['admin'] && $_SESSION['admin'] != -1)){
    header("Location: $BASE_URL" . 'pages/admin/feed.php');
} else{
    header("Location: $BASE_URL" . 'pages/auth/');
}
?>
