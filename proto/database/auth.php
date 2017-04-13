<?php
  
  function createUser($first_name, $last_name, $email, $password) { //TODO
    global $conn;
    $stmt = $conn->prepare("INSERT INTO 'Person' (email,password) VALUES (?, ?)");
    $stmt->execute(array($email, sha1($password)));
      $idPerson = $stmt->fetch();
      $stmt = $conn->prepare("INSERT INTO 'User' (idPerson, first_name, last_name) VALUES (?,?,?)");
      $stmt->execute(array($idPerson, $first_name, $last_name));

  }

  function isLoginCorrect($email, $password) { //TODO verificacao password com hash
    global $conn;
echo ' wtf';
    $stmt = $conn->prepare('SELECT *
                            FROM "public"."Person"
                            WHERE email = ? AND password = ?');
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch() == true;
  }


  function isAdmin($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT idPerson 
                            FROM 'Person' 
                            WHERE email = ?");
    $stmt->execute(array($email));
    $idPerson = $stmt->fetch();
    $stmt = $conn->prepare("SELECT * 
                            FROM 'Admin' 
                            WHERE idPerson = ?");
    $stmt->execute(array($idPerson));
    return $stmt->fetch() == true;
}
?>
