<?php
//TODO usar smarty e o init.php para confirmar a sessão
    //include_once("database/connection.php");
    session_start();
    if(isset($_SESSION['id_user'])){
		header('Location: pages/auth');
    } else{
		header('Location: pages/auth');
    }
?>
