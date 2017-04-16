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
    !$_POST['show_age'] ||
    !$_POST['show_gender']
) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}


$email = $_POST['email'];
$password = $_POST['password'];
$result = isLoginCorrect($email, $password);
$id = $result['idPerson'];
if ($id) {
    $_SESSION['id'] = $id;
    $_SESSION['success_messages'][] = 'Login successful';
    if (isAdmin($id)) {
        header("Location: $BASE_URL" . "pages/admin");
    } else {
        header("Location: $BASE_URL" . "pages/user/index.php");
    }
} else {
    $_SESSION['error_messages'][] = 'Login failed';
    header("Location: $BASE_URL");

}
?>