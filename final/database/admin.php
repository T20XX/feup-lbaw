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

?>
