<?php
function connexion()
{
	try
	{
		 $bd = new PDO('mysql:host=mysql-runningtagweb.alwaysdata.net;dbname=runningtagweb_v1;charset=utf8', '138803', 'runningTAG');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($bd);
}
?>