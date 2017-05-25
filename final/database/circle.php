<?php
function updateUpvotePost($idUser, $idPost)
{
    global $conn;
    $stmt = $conn->prepare('UPDATE  "VotePost"
                                  SET upvoted = NOT upvoted
                                  WHERE "idUser" = ? AND "idPost" = ?');
    return $stmt->execute(array($idUser, $idPost));
}

function addUpvotePost($idUser, $idPost){
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "VotePost" ("idPost", "idUser", upvoted) VALUES(?, ?, TRUE )');
    $stmt->execute(array($idPost, $idUser));
    return sqlca.sqlcode;
}
?>