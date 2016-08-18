<?php
	$pasPseud = "";
	$pasMail = "";
	$pasMail2 = "";

	if (isset($_POST["register"])){
		$name = $_POST["u"];
		$email = $_POST['m'];
		$email2 = $_POST['m2'];
		$password = $_POST['p'];
		$password2 = $_POST['p2'];

		if (!empty($_POST)) {
			if($email != $email2){
				$error = "Merci de saisir des adresses mails identiques";
				$pasPseud = $name;
				$pasMail = $email;
				$pasMail2 = $email2;
			}
			else if($_POST["p"] != $_POST["p2"]){
				$error = "Merci de saisir des mot de passe identiques";
				$pasPseud = $name;
				$pasMail = $email;
				$pasMail2 = $email2;
			}
			else{
				$file = 'bdd.json';
				$json = file_get_contents($file);
				$temp = json_decode($json, true);

				array_push($temp, array('pseudo' => $name, 'email' => $email, 'pass' => $password));

				$json_data = json_encode($temp); 
				file_put_contents($file, $json_data);
				header("Location: index.php?page=login");
				exit;
			}
		}	
	}
?>