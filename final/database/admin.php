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

?>
