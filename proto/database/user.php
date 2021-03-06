<?php
function getUserInfo($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM "User" 
                            WHERE "idPerson" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserEmail($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT email 
                            FROM "Person"
                            WHERE "idPerson" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserImage($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT path 
                            FROM "Image" 
                            WHERE "idUser" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserCircles($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "idCircle", "Circle".name, "Image".path
                            FROM (("Ingresso" JOIN
								"Circle" USING("idCircle"))JOIN
								"Image" USING("idCircle"))
                            WHERE "Ingresso"."idUser" = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}

function getUserInvites($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "Invite".sender, "Circle"."idCircle", "Circle".name, "User".first_name, "User".last_name, "Image".path
                            FROM ((("Invite" JOIN
								"Circle" USING("idCircle")) JOIN
								"User" ON("User"."idPerson" = "Invite".sender)) JOIN
								"Image" USING("idCircle"))
                            WHERE "Invite".receiver = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}

function updateUserInfo($id, $first_name, $last_name, $hometown, $birthday, $gender, $bio, $show_hometown, $show_birthday, $show_gender, $show_age)
{
    global $conn;
    $stmt = $conn->prepare('UPDATE "User"
                            SET (first_name, last_name, hometown, birthday, gender, bio, show_hometown, show_birthday, show_gender, show_age) = (? , ?, ?, ?, ?, ?, ?, ?, ?, ?)
                            WHERE "idPerson" = ?');
    $stmt->execute(array($first_name, $last_name, $hometown, $birthday, $gender, $bio, $show_hometown, $show_birthday, $show_gender, $show_age, $id));
}

function updateUserImage($id, $profile_photo){
    global $conn;
    $stmt = $conn->prepare('UPDATE "Image"
                            SET path = ?
                            WHERE "idUser" = ?');
    $stmt->execute(array($profile_photo, $id));
}

function addUserImage($id, $profile_photo){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Image" (path, "idUser") VALUES (?, ?)');
    $stmt->execute(array($profile_photo, $id));
}

function getMessagesAfter($id, $idUser1, $idUser2) {
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM (SELECT *
                            FROM "Message" 
                            WHERE "idMessage" > ? AND ((sender = ? AND receiver = ?) OR (sender = ? AND receiver = ?))
                            ORDER BY "idMessage" DESC
                            LIMIT 20) AS unordered_messages
                            ORDER BY "idMessage" ASC');
    $stmt->execute(array($id, $idUser1, $idUser2, $idUser2, $idUser1));
    return $stmt->fetchAll();
}

function addMessage($content, $sender, $receiver){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Message" (content, sender, receiver) VALUES (?, ?, ?)');
    $stmt->execute(array($content, $sender, $receiver));
}

?>
