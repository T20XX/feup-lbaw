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
    return $stmt->fetch() == true;
  }


/*  function isAdmin($email) {
    global $conn;
    $idPerson = getIDfromEmail($email);
    $stmt = $conn->prepare('SELECT *
                            FROM "public"."Admin"
                            WHERE idPerson = ?');
    $stmt->execute(array($idPerson));
    return $stmt->fetch() == true;
}

function getIDfromEmail($email) {
    global $conn;
    $stmt = $conn->prepare('SELECT "Person"."idPerson"
                            FROM "public"."Person"
                            WHERE email = ?');
    $stmt->execute(array($email));
    $idPerson = $stmt->fetch();
    return $idPerson;
}*/

function getUserInfoFromEmail($email) {
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM "public"."User" JOIN 
                                 "public"."Person" USING(idPerson) 
                            WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetchAll();
}

function getUserInfoFromID($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM "public"."User" 
                            WHERE idPerson = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}
?>
