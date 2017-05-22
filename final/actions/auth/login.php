<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/auth.php');
include_once($BASE_DIR .'database/user.php');
 
  if (!$_POST['email'] || !$_POST['password']) {
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
    $info = getUserInfo($id);
    $_SESSION['name'] = $info['first_name'] . " " . $info['last_name'];
    $_SESSION['success_messages'][] = 'Login successful';
  if (isAdmin($id)) {
      $_SESSION['admin'] = $id;
      header("Location: $BASE_URL" . "pages/admin");
  } else {
      header("Location: $BASE_URL" . "pages/user/index.php");
  }
  } else {
    $_SESSION['error_messages'][] = 'Login failed';
    header("Location: $BASE_URL");

  }
?>
