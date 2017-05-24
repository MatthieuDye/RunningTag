<?php
require_once 'model/User.php';


function isConnected()
{
	if (isset($_COOKIE["codeconnexion"]))
	{
		
		$cookieperso = $_COOKIE["codeconnexion"];
		$id = User::Get_User_Id($cookieperso);
		if (empty($id)) 
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{
		
		return false;
	}
}
//Indique si un utilisateur est connecté.

function onlineOnly()
{
	if(!isConnected())
	{
		header("Location: Connexion.php");
	}
}
//Pour les pages autorisées seulement par les utilisateurs connectés. Renvoie à la connexion sinon

function offlineOnly()
{
	if(isConnected())
	{
		header("Location: Accueil.php");
	}		
}
//Pour les pages autorisées seulement par les utilisateurs non connectés. Renvoie à la page d"accueil sinon

?>