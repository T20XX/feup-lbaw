<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/user.php');

if($_POST['idPerson']){
$id = $_POST['idPerson'];
$reason = $_POST['reason'];
addBan($id, $reason);
header("Location: $BASE_URL" . "pages/admin/users.php");
}
else if($_POST['idCircle']){

}
else if($_POST['idPost']){

}




?>
