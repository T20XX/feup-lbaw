<?php

  function createUser($first_name, $last_name, $email, $password) { //TODO
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "public"."Person" (email,password) VALUES (?, ?)');
    $stmt->execute(array($email, sha1($password)));
      $idPerson = $stmt->fetch();
      $stmt = $conn->prepare('INSERT INTO "public"."User" (idPerson, first_name, last_name) VALUES (?,?,?)');
      $stmt->execute(array($idPerson, $first_name, $last_name));

  }

  function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare('SELECT "Person"."idPerson"
                            FROM "public"."Person"
                            WHERE email = ? AND password = ?');
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch();
  }


function isAdmin($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "public"."Admin"
                            WHERE "idPerson" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch() == true;
}

function updateEmail($id, $email) {
    global $conn;
    $stmt = $conn->prepare('UPDATE "public"."Person"
                            SET email = ?
                            WHERE "idPerson" = ?');
    $stmt->execute(array($email, $id));
}
?>
