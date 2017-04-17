<?php
function getUserInfo($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM "public"."User" 
                            WHERE "idPerson" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserEmail($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT email 
                            FROM "public"."Person" 
                            WHERE "idPerson" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserImage($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT path 
                            FROM "public"."Image" 
                            WHERE "idUser" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserCircles($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "idCircle", "public"."Circle".name, "public"."Image".path
                            FROM (("public"."Ingresso" JOIN
								"public"."Circle" USING("idCircle"))JOIN
								"public"."Image" USING("idCircle"))
                            WHERE "Ingresso"."idUser" = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}

function getUserInvites($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "public"."Invite".sender, "public"."Circle"."idCircle", "public"."Circle".name, "public"."User".first_name, "public"."User".last_name, "public"."Image".path
                            FROM ((("public"."Invite" JOIN
								"public"."Circle" USING("idCircle")) JOIN
								"public"."User" ON("public"."User"."idPerson" = "public"."Invite".sender)) JOIN
								"public"."Image" USING("idCircle"))
                            WHERE "Invite"."receiver" = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}

function updateUserInfo($id, $first_name, $last_name, $hometown, $birthday, $gender, $bio, $show_hometown, $show_birthday, $show_gender, $show_age)
{
    global $conn;
    $stmt = $conn->prepare('UPDATE "public"."User"
                            SET (first_name, last_name, hometown, birthday, gender, bio, show_hometown, show_birthday, show_gender, show_age) = (? , ?, ?, ?, ?, ?, ?, ?, ?, ?)
                            WHERE "idPerson" = ?');
    $stmt->execute(array($first_name, $last_name, $hometown, $birthday, $gender, $bio, $show_hometown, $show_birthday, $show_gender, $show_age, $id));
}

function updateUserImage($id, $profile_photo)
{
    global $conn;
    $stmt = $conn->prepare('UPDATE "public"."Image"
                            SET path = ?
                            WHERE "idUser" = ?');
    $stmt->execute(array($profile_photo, $id));
}
?>
