<?php 
	require_once '../model/Evt.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);
	$ideventmodif = htmlspecialchars($_POST['ideventmodif']);
	$nomorga = htmlspecialchars($_POST['nomorga']);
	$nomevent = htmlspecialchars($_POST['nomevent']);
	$lieu = htmlspecialchars($_POST['lieu']);
	$description = htmlspecialchars($_POST['description']);

	var_dump($ideventmodif);
	var_dump($nomorga);
	var_dump($nomevent);
	var_dump($lieu);
	var_dump($description);

	if (empty($nomorga) || empty($nomevent) || empty($lieu) || empty($description) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	
	else {
		//$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Evt::Update_Evt($nomevent,$nomorga,$description,$lieu,$ideventmodif);	

		$messageValidation = "L'évènement a été créé avec succès !";
		header("Location: ../Validation.php?validation=".$messageValidation);
		/*
		if ($returnValue)
		{
			header("Location: ../Accueil.php"); // ramener à une page de confirmation	
		}	
		
		else {
			$messageErreur = "Erreur lors de l'insertion ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
		}*/
	}
?>