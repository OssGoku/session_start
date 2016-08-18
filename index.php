<?php 
	session_start();
	var_dump($_SESSION);
	$error = '';
	$page = 'accueil';
	$access = ['accueil', 'login', 'register'];

	if (isset($_GET['page']) && in_array($_GET['page'], $access)) {
		$page = $_GET['page'];
	}

	$accessTraitement = ['login', 'logout', 'register'];

	if (in_array($page, $accessTraitement)) {
		require 'controller/traitement-'.$page.'.php';
	}

	require 'controller/skel.php';
?>