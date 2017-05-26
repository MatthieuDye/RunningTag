<?php 
	require_once '../model/Rce.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);

	$idrecipemodif = htmlspecialchars($_POST['idrecipemodif']);
	$nomrecette = htmlspecialchars($_POST['nomrecette']);
	$description = 	 htmlspecialchars($_POST['description']);

	if (empty($nomrecette) || empty($description)  ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	
	else {
		//$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Rce::Update_Rce($nomrecette,$description,$idrecipemodif);	

		
		
		if ($returnValue)
		{
			$messageValidation = "La recette a été modifiée avec succès !";
			header("Location: ../Validation.php?validation=".$messageValidation);
		}	
		
		else {
			$messageErreur = "Erreur lors de l'insertion ";
			header("Location: ../Erreur.php?erreur=".$messageErreur);
		}
	}
?>