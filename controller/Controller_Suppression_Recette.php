<?php 
	require_once '../model/Rce.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);

	$idrecipesupp = htmlspecialchars($_POST['idrecipesupp']);
	
		$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Rce::Delete_Rce($idrecipesupp,$id);	

		
		
		
		if (!$returnValue)
		{
			header("Location: ../Suppression_Recette.php");	
		}	
		
		else {
			$messageErreur = "Erreur lors de la suppression ";
			header("Location: ../Erreur.php?erreur=".$messageErreur);

		}
?>