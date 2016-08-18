<?php
	if (isset($_POST["register"])){
		$name = $_POST["u"];
		$password = $_POST['p'];
		// var_dump($_POST);
		
		$_SESSION['pseudo'] = $_POST["u"];
		$_SESSION['email'] = $_POST["m"];
		$_SESSION['password'] = $_POST["p"];
		$_SESSION['time']     = time();
		// var_dump($_SESSION);

		if($_POST["m"] != $_POST["m2"]){
			$error = "Merci de saisir des adresses mails identiques";
		}
		if($_POST["p"] != $_POST["p2"]){
		$error = "Merci de saisir des mot de passe identiques";
		}
	}
			
		
			
?>