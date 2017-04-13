<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/auth.php');  //TODO

  if (!$_POST['email'] || !$_POST['first_name'] || !$_POST['last_name'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/auth/');
    exit;
  }

  $first_name = strip_tags($_POST['first_name']);
  $last_name = strip_tags($_POST['last_name']);
  $email = strip_tags($_POST['email']);
  $password = $_POST['password'];

  //$photo = $_FILES['photo'];
  //$extension = end(explode(".", $photo["name"]));

  try {
    createUser($first_name, $last_name, $email, $password);
    echo "Success!";
    //move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    //chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
  } catch (PDOException $e) {

    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/auth/');
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';
  //header("Location: $BASE_URL" . 'pages/user/');
?>
