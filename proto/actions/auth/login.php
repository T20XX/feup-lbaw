<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/auth.php');  
 
  if (!$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  

  $email = $_POST['email'];
  $password = $_POST['password'];
  $id = isLoginCorrect($email, $password);
  if ($id) {
    $_SESSION['id'] = $id;
    $_SESSION['success_messages'][] = 'Login successful';
    $info = getUserInfo($id);
  if ($info == null) {
      header("Location: $BASE_URL" . "pages/admin");
  } else {
      header("Location: $BASE_URL" . "pages/user/feed.php");
  }
  } else {
    $_SESSION['error_messages'][] = 'Login failed';
    header("Location: $BASE_URL");

  }
  //header("Location: $BASE_URL");
  //header("Location: $BASE_URL");
?>
