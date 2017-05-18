<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');

if(isset($_SESSION['id'])){
    if(!isset($_SESSION['admin'])){
        $id = $_SESSION['id'];
    }else {
        header("Location: $BASE_URL" . 'pages/admin/');
    }
} else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

if ($_GET['id']) {
    $id = $_GET['id'];
    if($id != $_SESSION['id']){
        $sender = $_SESSION['id']; // own id
        $receiver = $_GET['id']; // other id

        $receiver_info = getUserInfo($receiver);
        $receiver_image = getUserImage($receiver);

        $messages = getMessagesAfter(0,$sender, $receiver);
        $lastMessageId = end($messages)['idMessage'];

        $recentMessagesUsers = getRecentMessagesUsers($sender);


        $smarty->assign('sender', $sender);
        $smarty->assign('receiver', $receiver);
        $smarty->assign('receiver_info', $receiver_info);
        $smarty->assign('receiver_image', $receiver_image['path']);
        $smarty->assign('recentMessagesUsers', $recentMessagesUsers);
        $smarty->assign('messages', $messages);
        $smarty->assign('lastMessageId', $lastMessageId);
    }else{

    }
} else {

}

$smarty->display('user/messages.tpl');
?>
