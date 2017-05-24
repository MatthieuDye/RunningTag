<?php 
	require_once '../model/Evt.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);

	$ideventsupp = htmlspecialchars($_POST['ideventsupp']);
	
		$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Evt::Delete_Evt(intval($ideventsupp),intval($id));	

		
		
		if ($returnValue)
		{
			$messageValidation = "L'évènement a été supprimé avec succès !";
		header("Location: ../Validation.php?validation=".$messageValidation);	
		}	
		
		else {
			$messageErreur = "Erreur lors de la suppression ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);

		}
	
?>