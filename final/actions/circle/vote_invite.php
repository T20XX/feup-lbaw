<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');
include_once($BASE_DIR . 'database/circle.php');


$idInvite = $_POST['idInvite'];
$idUser = $_SESSION['id'];
$vote_state = $_POST['vote_state'];
$nUsers = $_POST['nUsers'];

addVoteInvite($idInvite, $idUser, $vote_state);

$votes = getInviteVotesCircleAndReceiver($idInvite);
if(($votes['upvotes'] > $votes['downvotes']) && (($votes['upvotes'] + $votes['downvotes'])) >= ($nUsers/2)){
    addUserToCircle($votes['receiver'], $votes['idCircle']);
    removeInvite($idInvite);
} else {
    removeInvite($idInvite);
}

header("Location: $BASE_URL" . "pages/circle/index.php?id=". $votes['idCircle']);
?>
