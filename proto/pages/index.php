<?php
include_once('../config/init.php');
if(isset($_SESSION['id'])){
    if(isset($_SESSION['admin'])){
        header("Location: $BASE_URL" . 'pages/admin/');
    }else {
        header("Location: $BASE_URL" . 'pages/user/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}
?>