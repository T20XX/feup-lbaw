<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/user.php');


$id = $_POST['idInvite'];

acceptInvite($id);

header("Location: $BASE_URL" . "pages/user/invites.php");
?>
