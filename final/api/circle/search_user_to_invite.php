<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/circle.php');

if(!$_GET['query'])
	die(header("HTTP/1.0 405 Receiver ID Error"));

$query = $_GET['query'];

$query = str_replace(" ", "|", $query);

$utilizadores = get5UsersInv($query);

$data = array();
$data['users'] = $utilizadores;
echo json_encode($data);
?>
