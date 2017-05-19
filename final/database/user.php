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

function isUserCircle($idUser, $idCircle)
{
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "Ingresso"
                            WHERE "idUser" = ? AND "idCircle" = ?');
    $stmt->execute(array($idUser, $idCircle));
    return $stmt->fetch() == true;
}

function getUserInvites($id)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "Invite"."idInvite", "Invite".sender, "Circle"."idCircle", "Circle".name, "User".first_name, "User".last_name, "Image".path
                            FROM ((("Invite" JOIN
								"Circle" USING("idCircle")) JOIN
								"User" ON("User"."idPerson" = "Invite".sender)) LEFT JOIN
								"Image" USING("idCircle"))
                            WHERE "Invite".receiver = ? and "Invite".accepted  = false');
    $stmt->execute(array($id));
    return $stmt->fetchAll(); //yooo
}

function getCircleInfo($id){
	global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "Circle"
                            WHERE "idCircle" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}
function acceptInvite($id){
  global $conn;
  $stmt = $conn->prepare('UPDATE "Invite"
                          SET accepted = true
                          WHERE "idInvite" = ?');
  $stmt->execute(array($id));

}

function removeInvite($id){
  global $conn;
  $stmt = $conn->prepare('DELETE FROM "Invite"
                          WHERE "idInvite" = ?');
  $stmt->execute(array($id));

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


function getPostsFromCircle($idCircle){
	global $conn;
	$stmt = $conn->prepare('SELECT "Post"."idPost", "User"."idPerson", i1.path, "User".first_name, "User".last_name, "Post".date, "Post".content,  json_agg(i2.path)
                            FROM ((("Post" JOIN
								"User"  ON("User"."idPerson" = "Post".poster)) LEFT JOIN
								"Image" i1 ON(i1."idUser" = "Post".poster)) FULL OUTER JOIN
								"Image" i2 ON(i2."idPost" = "Post"."idPost"))
							WHERE "Post"."idCircle" = ?
					GROUP BY "Post"."idPost", "User"."idPerson", i1.path
					ORDER BY "Post"."idPost" DESC
                            LIMIT 10');

    $stmt->execute(array($idCircle));
	return $stmt->fetchAll();
}

function getPostsForFeed($idUser){
	global $conn;
	$stmt = $conn->prepare('SELECT "Circle"."idCircle", "Circle".name, "Post"."idPost", "User"."idPerson", i1.path, "User".first_name, "User".last_name, "Post".date, "Post".content,  json_agg(i2.path)
                            FROM ((((("Ingresso" JOIN
                                                                "Circle" ON ("Circle"."idCircle" = "Ingresso"."idCircle")) JOIN
								"Post" ON ("Post"."idCircle"= "Ingresso"."idCircle")) JOIN
                                                                "User"  ON("User"."idPerson" = "Post".poster)) LEFT JOIN								 
								"Image" i1 ON(i1."idUser" = "Ingresso"."idUser")) FULL OUTER JOIN
								"Image" i2 ON(i2."idPost" = "Ingresso"."idUser"))
							WHERE "Ingresso"."idUser" = ?
					GROUP BY "Post"."idPost", "User"."idPerson", i1.path, "Circle"."idCircle"
					ORDER BY "Post"."idPost" DESC
                            LIMIT 10');

    $stmt->execute(array($idCircle));
	return $stmt->fetchAll();
}


function getRecentMessagesUsers($id){
    global $conn;
    $stmt = $conn->prepare('SELECT DISTINCT ON (sender) "Message".sender , "Message"."idMessage", "User".first_name, "User".last_name, "Image".path
                            FROM (("Message" JOIN
                              "User" ON ("User"."idPerson" = "Message".sender)) LEFT JOIN
                                "Image" ON ("Image"."idUser" = "Message".sender))
                            WHERE receiver = ?
                            ORDER BY sender, "idMessage" DESC
                            LIMIT 10');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}

function fetchAllUsers(){
  global $conn;
  $stmt = $conn->prepare('SELECT "idPerson", email, first_name, last_name, bio
                          FROM ("User" JOIN
                          "Person" USING("idPerson"))');
  $stmt->execute();
  return $stmt->fetchAll();
}

function fetchAllCircles(){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM "Circle"');
  $stmt->execute();
  return $stmt->fetchAll();
}

?>
