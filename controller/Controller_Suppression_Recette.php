<?php 
	require_once '../model/Evt.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);

	$idrecipesupp = htmlspecialchars($_POST['idrecipesupp']);
	
		$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Evt::Delete_Evt($idrecipesupp,$id);	

		
		
		if (!$returnValue)
		{
			header("Location: ../Suppression_Evenement.php");	
		}	
		
		else {
			$messageErreur = "Erreur lors de la suppression ";
			header("Location: ../Erreur.php?erreur=".$messageErreur);

		}
	
?>