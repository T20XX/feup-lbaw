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
    $stmt = $conn->prepare('SELECT "User"."idPerson", "User".first_name, "User".last_name, "Image".path
                                FROM (("Ingresso" JOIN
                                "User" ON ("User"."idPerson" = "Ingresso"."idUser")) LEFT JOIN
                                "Image" ON ("Image"."idUser" = "Ingresso"."idUser"))
                                WHERE "Ingresso"."idCircle" = ?');
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

function getPostsFromCircle($idCircle)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "Post"."idPost", "Post".upvotes, "User"."idPerson", i1.path as userImage, "User".first_name, "User".last_name, "Post".date, "Post".content, i2.path as postImage
                                FROM ((("Post" JOIN
                                    "User"  ON("User"."idPerson" = "Post".poster)) JOIN
                                    "Image" as i1 ON(i1."idUser" = "Post".poster)) LEFT JOIN
                                    "Image" as i2 ON(i2."idPost" = "Post"."idPost"))
                                WHERE "Post"."idCircle" = ?
                        ORDER BY "Post"."idPost" DESC
                                LIMIT 10');

    $stmt->execute(array($idCircle));
    return $stmt->fetchAll();
}

function getSearchPostFromCircle($idCircle, $searchable_content)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "Post"."idPost", "User"."idPerson", i1.path, "User".first_name, "User".last_name, "Post".date, "Post".content,  json_agg(i2.path)
                                FROM ((("Post" JOIN
                                    "User"  ON("User"."idPerson" = "Post".poster)) LEFT JOIN
                                    "Image" i1 ON(i1."idUser" = "Post".poster)) FULL OUTER JOIN
                                    "Image" i2 ON(i2."idPost" = "Post"."idPost"))
                                WHERE "Post"."idCircle" = ? AND to_tsvector("Post".content) @@ to_tsquery(?)
                        GROUP BY "Post"."idPost", "User"."idPerson", i1.path
                        ORDER BY "Post"."idPost" DESC
                                LIMIT 10');

    $stmt->execute(array($idCircle, $searchable_content));
    return $stmt->fetchAll();
}

function getPostById($id){
    global $conn;
    $stmt = $conn->prepare('SELECT *
                                FROM "Post" 
                                WHERE "idPost" = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}

function addInvite($sender, $receiver, $idCircle){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "Invite" (sender, receiver, "idCircle")
                              VALUES (? , ?, ?)');
    $stmt->execute(array($sender, $receiver, $idCircle));
}

function getAllInvitesBeforeDate($date){
    global $conn;
    $stmt = $conn->prepare('SELECT *
                                FROM "Invite" 
                                WHERE expiration_date <= ?');
    $stmt->execute(array($date));
    return $stmt->fetchAll();
}

function get5UsersInv($texto){
    global $conn;
    $stmt = $conn->prepare('SELECT "idPerson", first_name, last_name, path
                                FROM "User" LEFT JOIN "Image" ON "Image"."idUser" = "User"."idPerson"
                                WHERE to_tsvector("User".first_name || \' \' || "User".last_name) @@ to_tsquery(?) LIMIT 5');
    $stmt->execute(array($texto));
    return $stmt->fetchAll();

}

function doesCircleExists($idCircle){
    global $conn;
    $stmt = $conn->prepare('SELECT * from "Circle" where "Circle"."idCircle" = ?');
    $stmt->execute(array($idCircle));
    return $stmt->fetchAll();
}

?>