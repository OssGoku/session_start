<?php
	$recup = file_get_contents("bdd.json");
	$tableau = json_decode($recup, true);


	if (isset($_POST["login"])){
		$name = $_POST["u"];
		$password = $_POST['p'];
		var_dump($_POST);

		for($i = 0; $i < sizeof($tableau); $i++){
			if($name === $tableau[$i]['pseudo'] && $password === $tableau[$i]['pass']){
				
				$_SESSION['name'] = $name;
				
				$_SESSION['email'] = $tableau[$i]['email'];
				$_SESSION['time'] = time();

				header("Location: index.php?page=accueil_in");
				exit;
			}
		}

// for($j = 0; $j < sizeof($tableau[$idArticle]['commentaire']); $j++){

// 	if ($tableau[$idArticle]['commentaire']) {
		
// 		$comm = $tableau[$idArticle]['commentaire'][$j];
// 		require('view/new-comments.phtml');
// 	}
}

?>