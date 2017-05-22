<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/search_users_circles.php');

if(!$_GET['query'])
	die(header("HTTP/1.0 405 Receiver ID Error"));

$query = $_GET['query'];

$query = str_replace(" ", "|", $query);

$utilizadores = get5Users($query);

$circulos = get5Circles($query);

$data = array();
$data['users'] = $utilizadores;
$data['circles'] = $circulos;
echo json_encode($data);
?>
