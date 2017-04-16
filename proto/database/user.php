<?php
function getUserInfo($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM "public"."User" 
                            WHERE "idPerson" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserEmail($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT email 
                            FROM "public"."Person" 
                            WHERE "idPerson" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserImage($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT path 
                            FROM "public"."Image" 
                            WHERE "idUser" = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
}

function getUserCircles($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT "idCircle" "Circle".name
                            FROM "public"."Ingresso" JOIN
								"Circle" USING("idCircle")
                            WHERE "idUser" = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}
?>
