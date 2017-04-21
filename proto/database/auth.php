<?php

  function createUser($first_name, $last_name, $email, $password) { //TODO
    global $conn;
    $stmt = $conn->prepare('INSERT INTO Person (email,password) VALUES (?, ?)');
    $stmt->execute(array($email, sha1($password)));
      $idPerson = $stmt->fetch();
      $stmt = $conn->prepare('INSERT INTO "User" (idPerson, first_name, last_name) VALUES (?,?,?)');
      $stmt->execute(array($idPerson, $first_name, $last_name));

  }

  function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare('SELECT idPerson
                            FROM Person
                            WHERE email = ? AND password = ?');
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch();
  }


function isAdmin($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM Admin
                            WHERE idPerson = ?');
    $stmt->execute(array($id));
    return $stmt->fetch() == true;
}

function updateEmail($id, $email) {
    global $conn;
    $stmt = $conn->prepare('UPDATE Person
                            SET email = ?
                            WHERE idPerson = ?');
    $stmt->execute(array($email, $id));
}

function updatePassword($id, $password) {
    global $conn;
    $stmt = $conn->prepare('UPDATE Person
                            SET password = ?
                            WHERE idPerson = ?');
    $stmt->execute(array(sha1($password), $id));
}
?>
