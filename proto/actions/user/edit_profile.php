<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/auth.php');
include_once($BASE_DIR . 'database/user.php');

//TODO

if (!$_POST['email'] ||
    !$_POST['password'] ||
    !$_POST['first_name'] ||
    !$_POST['last_name'] ||
    !$_POST['hometown'] ||
    !$_POST['birthday'] ||
    !$_POST['gender'] ||
    !$_POST['bio'] ||
    !$_POST['show_hometown'] ||
    !$_POST['show_birthday'] ||
    !$_POST['show_gender'] ||
    !$_POST['show_age']
) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$id = $_SESSION['id'];
$email = getUserEmail($id)['email'];
$password = $_POST['password'];
$result = isLoginCorrect($email, $password);
if ($result['idPerson']) {
    //change email
    if ($email != $_POST['email']) {
        $email = $_POST['email'];
        updateEmail($id, $email);
    }
    //change password
    if ($password != $_POST['new_password']) {
        $password = $_POST['new_password'];
        updatePassword($id, $password);
    }
    //change info
    updateUserInfo($id,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['hometown'],
        $_POST['birthday'],
        $_POST['gender'],
        $_POST['bio'],
        $_POST['show_hometown'],
        $_POST['show_birthday'],
        $_POST['show_gender'],
        $_POST['show_age']);

    header("Location: $BASE_URL" . "pages/user/profile.php");
} else {
    $_SESSION['error_messages'][] = 'Password wrong';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>