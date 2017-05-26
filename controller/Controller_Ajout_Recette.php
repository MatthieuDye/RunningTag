<?php 
	require_once '../model/Rce.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);

	$nomrce = htmlspecialchars($_POST['nomrce']);
	$contentrce = htmlspecialchars($_POST['contentrce']);
	

	if (empty($nomrce) || empty($contentrce) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	
	else {
		$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Rce::Add_Rce($nomrce,$contentrce,$id);	

		
		
		if (!$returnValue)
		{
			$messageValidation = "La recette a été ajoutée avec succès !";
			header("Location: ../Validation.php?validation=".$messageValidation);
		}	
		
		else {
			$messageErreur = "Erreur lors de la création de la recette ";
		
			header("Location: ../Erreur.php?erreur=".$messageErreur);

		}
	}
?>