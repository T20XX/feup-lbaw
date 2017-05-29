<?php

function getUsersCount()
{
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(*) FROM "User"');
    $stmt->execute();
    return $stmt->fetch()['count'];
}

function getCirclesCount()
{
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(*) FROM "Circle"');
    $stmt->execute();
    return $stmt->fetch()['count'];
}

function getPostsCount()
{
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(*) FROM "Post"');
    $stmt->execute();
    return $stmt->fetch()['count'];
}

function getImagesCount()
{
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(*) FROM "Image"');
    $stmt->execute();
    return $stmt->fetch()['count'];
}

function fetchCircleInfo()
{
    global $conn;
    $stmt = $conn->prepare('SELECT "idCircle", name, nusers,
 COUNT("idPost") AS nposts  
 FROM ("Circle" LEFT JOIN "Post" 
 USING ("idCircle")) GROUP BY "idCircle"');
    $stmt->execute();
    return $stmt->fetchAll();
}

function fetchAllReportedCircles()
{
    global $conn;
    $stmt = $conn->prepare('SELECT "idCircle", name, nusers,
 COUNT("idPost") AS nposts  
 FROM (("Circle" LEFT JOIN "Post" 
 USING ("idCircle"))  JOIN "ReportCircle" USING ("idCircle") )
  GROUP BY "idCircle"');
    $stmt->execute();
    return $stmt->fetchAll();
}

function fetchAllReportedPostsBySearch($texto)
{
    global $conn;
    $stmt = $conn->prepare('SELECT "Post"."idPost", "idReport", first_name, last_name, "idCircle", poster, content, upvotes, date FROM "Post" JOIN "ReportPost" ON "Post"."idPost" = "ReportPost"."idPost" JOIN "User" ON "Post".poster = "User"."idPerson"
  WHERE to_tsvector(first_name || \' \' || last_name || \' \' || content) @@ to_tsquery(?) BY "Post"."idPost", first_name, last_name, "idReport"');
    $stmt->execute(array($texto));
    return $stmt->fetchAll();
}

function fetchAllReportedPosts()
{
    global $conn;
    $stmt = $conn->prepare('SELECT "Post"."idPost", "idReport", first_name, last_name, "idCircle", poster, content, upvotes, date FROM "Post" JOIN "ReportPost" ON "Post"."idPost" = "ReportPost"."idPost" JOIN "User" ON "Post".poster = "User"."idPerson"
  GROUP BY "Post"."idPost", first_name, last_name, "idReport"');
    $stmt->execute();
    return $stmt->fetchAll();
}

function fetchAllPostsBySearch($texto)
{
    global $conn;
    $stmt = $conn->prepare('SELECT first_name, last_name, "idPost", "idPerson", "idCircle", upvotes, content, date FROM "Post" JOIN "User" ON "User"."idPerson" = "Post".poster 
    WHERE to_tsvector(first_name || \' \' || last_name || \' \' || content) @@ to_tsquery(?)');
    $stmt->execute(array($texto));
    return $stmt->fetchAll();
}

function fetchAllPosts()
{
    global $conn;
    $stmt = $conn->prepare('SELECT first_name, last_name, "idPost", "idPerson", "idCircle", upvotes, content, date FROM "Post" JOIN "User" ON "User"."idPerson" = "Post".poster');
    $stmt->execute();
    return $stmt->fetchAll();
}

function addBan($id, $reason)
{
    global $conn;
    $stmt = $conn->prepare('UPDATE "User"
                              SET (banned , ban_reason) = (true, ?)
                              WHERE "idPerson" = ?');
    $stmt->execute(array($reason, $id));
}

function deleteCircle($id)
{
    global $conn;
    $stmt = $conn->prepare('DELETE FROM "Circle" 
                              WHERE "idCircle" = ?');
    $stmt->execute(array($id));
}

function deletePost($id)
{
    global $conn;
    $stmt = $conn->prepare('DELETE FROM "Post" 
                              WHERE "idPost" = ?');
    $stmt->execute(array($id));
}

function getUsersBySearch($texto){
    global $conn;
    $stmt = $conn->prepare('SELECT "idPerson", first_name, last_name, path
                            FROM "User" LEFT JOIN "Image" ON "Image"."idUser" = "User"."idPerson"
                            WHERE to_tsvector("User".first_name || \' \' || "User".last_name) @@ to_tsquery(?) LIMIT 40');
    $stmt->execute(array($texto));
    return $stmt->fetchAll();
}

function getCirclesBySearch($texto){
    global $conn;
    $stmt = $conn->prepare('SELECT "Circle"."idCircle", name, path
                            FROM "Circle" LEFT JOIN "Image" ON "Image"."idCircle" = "Circle"."idCircle"
                            WHERE to_tsvector("Circle".name) @@ to_tsquery(?) LIMIT 40');
    $stmt->execute(array($texto));
    return $stmt->fetchAll();
}



?>