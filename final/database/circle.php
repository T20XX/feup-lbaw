<?php
function updateUpvotePost($idUser, $idPost)
{
    global $conn;
    $stmt = $conn->prepare('UPDATE  "VotePost"
                                  SET upvoted = NOT upvoted
                                  WHERE "idUser" = ? AND "idPost" = ?');
    return $stmt->execute(array($idUser, $idPost));
}

function addUpvotePost($idUser, $idPost)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "VotePost" ("idPost", "idUser", upvoted) VALUES(?, ?, TRUE )');
    return $stmt->execute(array($idPost, $idUser));
}

function createCircle($name)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Circle" (name, nusers) VALUES(?, 0)
                                      RETURNING "idCircle"');
    $stmt->execute(array($name));
    return $stmt->fetch()['idCircle'];
}

function addUserToCircle($idUser, $idCircle)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Ingresso" ("idUser", "idCircle") VALUES(?, ?)');
    $stmt->execute(array($idUser, $idCircle));
}

function getCircleMembers($idCircle)
{
    global $conn;
    $stmt = $conn->prepare('SELECT *
                                FROM ("Ingresso" JOIN
                                "User" ON ("User"."idPerson" = "Ingresso"."idUser"))
                                WHERE "idCircle" = ?');
    $stmt->execute(array($idCircle));
    return $stmt->fetchAll();
}

function createPost($idUser, $idCircle, $content)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Post" ("idCircle", poster, content, upvotes) VALUES(?,?,?,0)
                            RETURNING "idPost"');
    $stmt->execute(array($idCircle, $idUser, $content));
    return $stmt->fetch()['idPost'];
}

function addImagetoPost($idPost, $path)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Image" ("idPost", path) VALUES(?,?)');
    $stmt->execute(array($idPost, $path));
    return $stmt->fetch();
}

function removeUserFromCircle($idUser, $idCircle)
{
    global $conn;
    $stmt = $conn->prepare('DELETE FROM "Ingresso"
                            WHERE "idUser" = ? AND "idCircle" = ?');
    $stmt->execute(array($idUser, $idCircle));
}

function addCommentToPost($idPost, $idUser, $content)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Comment" ("idUser", "idPost", content) VALUES (?,?,?)');
    $stmt->execute(array($idUser, $idPost, $content));
}


function getCommentsOfPost($post)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "Comment"."idComment", "Comment"."idUser", "Comment"."idPost",
                                        "Comment".content,  "Comment".date, "User".first_name, "User".last_name,
                                         "Image".path
                                FROM (("Comment" JOIN
                                      "User" ON ("User"."idPerson" = "Comment"."idUser")) JOIN
                                      "Image" ON("Image"."idUser" = "Comment"."idUser"))
                                WHERE "Comment"."idPost" = ?
                                ORDER BY "Comment"."idComment" ASC');
    $stmt->execute(array($post));
    return $stmt->fetchAll();
}

function addReply($idUser, $idComment,  $content){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "CommentResponse" ("idUser", "idComment", content) VALUES(?,?,?)');
    $stmt->execute(array($idUser, $idComment, $content));
}

function getRepliesOfComment($comment){
    global $conn;
    $stmt = $conn->prepare('SELECT "CommentResponse"."idCommentResponse", "CommentResponse"."idUser", "CommentResponse".content,  
                                      "CommentResponse".date, "User".first_name, "User".last_name,"Image".path
                                FROM (("CommentResponse" JOIN
                                      "User" ON ("User"."idPerson" = "CommentResponse"."idUser")) JOIN
                                      "Image" ON("Image"."idUser" = "CommentResponse"."idUser"))
                                WHERE "CommentResponse"."idComment" = ?
                                ORDER BY "CommentResponse"."idCommentResponse" ASC');
    $stmt->execute(array($comment));
    return $stmt->fetchAll();
}

?>