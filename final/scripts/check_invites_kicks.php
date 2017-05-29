<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/user.php');
include_once($BASE_DIR .'database/circle.php');

$currentDate = date("Y-m-d");
$invites = getAllInvitesBeforeDate($currentDate);
foreach($invites as $invite){
    if($invite['upvotes']>$invite['downvotes']){
        addUserToCircle($invite['receiver'], $invite['idCircle']);
        removeInvite($invite['idInvite']);
    } else {
        removeInvite($invite['idInvite']);
    }
}
?>