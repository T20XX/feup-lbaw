<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/admin.php');

if(!$_GET['query'])
	die(header("HTTP/1.0 405 Receiver ID Error"));

$query = $_GET['query'];

$query = str_replace(" ", "|", $query);

$circulos = getCirclesBySearch($query);

$data = array();
$data['circles'] = $circulos;
echo json_encode($data);
?>
