<?php
function upvotePost($idUser, $idPost)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO "VotePost" VALUES(?, ?, TRUE )
                                  ON DUPLICATE KEY UPDATE
                                  upvoted = !upvoted');
    return $stmt->execute(array($idPost, $idUser));
}

?>