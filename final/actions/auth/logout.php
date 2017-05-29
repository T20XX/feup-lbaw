<?php
  include_once('../../config/init.php');

  session_destroy();
  $_SESSION['success_messages'][] = 'Logout successfully';
  header('Location: ' . $BASE_URL);
?>
