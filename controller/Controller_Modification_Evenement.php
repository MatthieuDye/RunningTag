<?php 
	require_once '../model/Evt.php';
	require_once '../model/User.php';
	//ini_set('display_errors',1);

	$ideventmodif = htmlspecialchars($_POST['ideventmodif']);
	
		$id = User::Get_User_Id($_COOKIE['codeconnexion']);
		Evt::Change_Evt($ideventsupp,$id);	

		
		
		if ($returnValue)
		{
			header("Location: ../Suppression_Evenement.php");	
		}	
		
		else {
			$messageErreur = "Erreur lors de la modification ";
			header("Location: ../Erreur.php?erreur=".$messageErreur);

		}
	