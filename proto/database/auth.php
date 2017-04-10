<?php
  
  function createUser($realname, $username, $password) { //TODO
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?)");
    $stmt->execute(array($username, $realname, sha1($password)));
  }

  function isLoginCorrect($email, $password) { //TODO verificacao password com hash
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM Person 
                            WHERE email = ? AND password = ?");
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch() == true;
  }
?>
