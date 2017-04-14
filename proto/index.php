<?php
include_once('../../config/init.php');
    if(isset($_SESSION['email'])){
		header('Location: pages/auth/');
    } else{
		header('Location: pages/user/');
    }
?>
