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
    //TODO success and error messages

//change email
    if ($email != $_POST['email']) {
        $email = $_POST['email'];
        updateEmail($id, $email);
    }
//change password
    if ($_POST['new_password'] &&
        $password != $_POST['new_password'] &&
        $_POST['new_password'] == $_POST['new_password2']
    ) {
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

//change profile photo
    if (!empty($_FILES['profile_photo']['name'])) {
        $image_path = $BASE_DIR . "resources/users/" . $id;
        $image_url = $BASE_URL . "resources/users/" . $id;
        $file_existed = false;

        if (file_exists($image_path)) {
            unlink($image_path);
            $file_existed = true;
        }
        if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $image_path)) {
            if ($file_existed) {
                updateUserImage($id, $image_url);
            }else{
                addUserImage($id, $image_url);
            }
        } else {

        }
    }


    header("Location: $BASE_URL" . "pages/user/profile.php");
} else {
    $_SESSION['error_messages'][] = 'Password wrong';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>