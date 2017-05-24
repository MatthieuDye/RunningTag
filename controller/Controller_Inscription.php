'<?php
	require_once '../model/User.php';

	$name = htmlspecialchars($_POST['name']);
	$firstName = htmlspecialchars($_POST['firstname']);
	$gender = htmlspecialchars($_POST['gender']);
	$mail = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$password_check = htmlspecialchars($_POST['password_check']);
	

	$mailverif=User::Check_Mail($mail);
	//var_dump($mailverif);

	if (empty($name) || empty($gender) || empty($firstName) || empty($password) || empty($password_check) || empty($mail) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (strlen($password)<6) {
		$messageErreur = 'Votre mot de passe doit faire plus de 6 caractères';
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif ($password != $password_check) {
		$messageErreur = 'Les mots de passe saisies ne sont pas identiques ! ';
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
		$messageErreur = "Votre email n'est pas valide  ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(empty($mailverif))) {
		$messageErreur = "Ce mail est déjà associé à un compte !";
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		$password = password_hash($password,PASSWORD_BCRYPT);

		User::Add_User($gender,$name,$firstName,$password,$mail);

		//$messageErreur = "Compte créé !".$gender.$name.$firstName.$password.$mail;
		//header("Location: ../Erreur.php?erreur=".$messageErreur);

		$cookiecode=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
			
			
		setcookie('codeconnexion', $cookiecode, time()+(300), "/");

		User::Set_cookieCode($mail,$cookiecode);
		
		header("Location: ../Accueil.php");
	}
	
?>