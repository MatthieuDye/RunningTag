<?php 
	require_once '../model/Rce.php';

	//ini_set('display_errors',1);

	$nomrce = htmlspecialchars($_POST['nomrce']);
	$contentrce = htmlspecialchars($_POST['contentrce']);
	

	if (empty($nomrce) || empty($contentrce) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	
	else {
		Rce::Add_Rce($nomrce,$contentrce);	

		$messageValidation = "La recette a été ajoutée avec succès !";
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