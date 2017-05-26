<?php 
	require_once '../model/Rce.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);
	$idrecipemodif = htmlspecialchars($_POST['idrecipemodif']);
	$nomorga = htmlspecialchars($_POST['nomorga']);
	

	if (empty($nomorga) || empty($nomevent)  ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	
	else {
		//$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Rce::Update_Rce($nomevent,$nomorga,$description,$lieu,$idrecipemodif);	

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