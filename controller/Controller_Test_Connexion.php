<?php
require_once 'model/User.php';


function isConnected() //Indique si un utilisateur est connecté.
{
	if (isset($_COOKIE["codeconnexion"]))
	{
		
		$cookieperso = $_COOKIE["codeconnexion"];
		$userId = User::Get_User_Id($cookieperso);
		if (empty($userId)) 
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


function onlineOnly() //Pour les pages autorisées seulement par les utilisateurs connectés. Renvoie à la connexion sinon
{
	if(!isConnected())
	{
		header("Location: Connexion.php");
	}
}


function offlineOnly()//Pour les pages autorisées seulement par les utilisateurs non connectés. Renvoie à la page d"accueil sinon
{
	if(isConnected())
	{
		header("Location: Accueil.php");
	}		
}


function adminOnly() //Pour les pages seulements autorisées par un admin, sinon renvoie à l"accueil
{
	if(isConnected())
	{
		$userId = User::Get_User_Id($_COOKIE["codeconnexion"]);
		$roleId = User::Get_User_Role_Id($userId);
		$roleTitle = Role::Get_Role_Title($roleId);
		if($roleTitle != "Administrateur")
		{
			header("Location: Accueil.php");
		}
	}
	else
	{
		header("Location: Accueil.php");
	}
}


if(isConnected())
{
	setcookie("codeconnexion", $_COOKIE["codeconnexion"], time()+(500), "/");
}
//L"utilisateur prouve qu"il est actif, on réinitialise la date d"expiration de son cookie

$userId=User::Get_User_Id($_COOKIE["codeconnexion"]);
?>