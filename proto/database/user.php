<?php
function getUserInfoFromID($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM "public"."User" 
                            WHERE idPerson = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}
?>
