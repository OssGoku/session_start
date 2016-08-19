<?php

//	SI connecté
//	ALORS rediriger vers ACCUEIL_IN
//  SINON rediriger vers ACCUEIL.PHTML

	if(empty($_SESSION)){
		require('controller/header.php');
		require('view/accueil.phtml');
	}
	else{
		require('controller/header_in.php');
		require('view/accueil_in.phtml');
	}

?>