<?php
function getUserInfo($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM User 
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

function updateUserImage($id, $profile_photo)
{
    global $conn;
    $stmt = $conn->prepare('UPDATE "Image"
                            SET path = ?
                            WHERE "idUser" = ?');
    $stmt->execute(array($profile_photo, $id));
}
?>
