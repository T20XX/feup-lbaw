<?php

function get5Users($texto){
	
	global $conn;
    $stmt = $conn->prepare('SELECT "idPerson", first_name, last_name, path
                            FROM "User" LEFT JOIN "Image" ON "Image"."idUser" = "User"."idPerson"
                            WHERE to_tsvector("User".first_name || ' ' || "User".last_name) @@ to_tsquery(?) LIMIT 5');
    $stmt->execute(array($texto));
    return $stmt->fetchAll();
	
}

function get5Circles($texto){
	
	global $conn;
    $stmt = $conn->prepare('SELECT "Circle"."idCircle", name, path
                            FROM "Circle" LEFT JOIN "Image" ON "Image"."idCircle" = "Circle"."idCircle"
                            WHERE to_tsvector("Circle".name) @@ to_tsquery(?) LIMIT 5');
    $stmt->execute(array($texto));
    return $stmt->fetchAll();
	
}

?>
