<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/user.php');


$id = $_POST['idInvite'];

$currentDate = date("Y-m-d");
$expirationDate = date('Y-m-d',strtotime($currentDate . "+ 1 days"));
acceptInvite($id, $expirationDate);

header("Location: $BASE_URL" . "pages/user/invites.php");
?>
