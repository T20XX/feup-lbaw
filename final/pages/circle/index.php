<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/user.php');
include_once($BASE_DIR .'database/circle.php');

if(isset($_SESSION['id'])){
  //  if(isset($_SESSION['admin'])){
        //header("Location: $BASE_URL" . 'pages/admin/');
    //}
}else {
    header("Location: $BASE_URL" . 'pages/auth/');
}

$id = $_SESSION['id'];

if ($_GET['id']) {
	$idCircle = $_GET['id'];
	if(isUserCircle($id, $idCircle)){
	if($_GET['post']){
		$posts = getPostById($_GET['post']);
		}else{

		if($_GET['query']){
			$posts = getSearchPostFromCircle($idCircle, $_GET['query']);
		}
		else{
			$posts = getPostsFromCircle($idCircle);
        }
    }
		$circle = getCircleInfo($idCircle);
		$members = getCircleMembers($idCircle);

        $smarty->assign('title', $circle['name']);
        $smarty->assign('members', $members);
		$smarty->assign('posts', $posts);
        $smarty->assign('posts.json_agg', json_decode($posts.json_agg));
		$smarty->assign('circle', $circle);
        $smarty->assign('idCircle', $idCircle);
		}
}
$smarty->assign('jsPath', $BASE_URL . "javascript/circle/index.js");
$smarty->display('circle/index.tpl');
?>
