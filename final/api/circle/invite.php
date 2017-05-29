<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/circle.php');

if (isset($_SESSION['id'])) {
    if (!isset($_SESSION['admin'])) {
        if ($_POST['idCircle']) {
            if ($_POST['idUser']) {

                $sender = $_SESSION['id'];
                $idCircle = $_POST['idUser'];
            $receiver = $_POST['idCircle'];

            addInvite($sender, $idUser, $content);
            } else {
                die(header("HTTP/1.0 404 User Not Found"));
            }
        } else {
            die(header("HTTP/1.0 404 Circle Not Found"));
        }
    } else {
    }
}


?>