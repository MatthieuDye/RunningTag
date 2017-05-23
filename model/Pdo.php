<?php
function connexion()
{
	try
	{
		 $bd = new PDO('mysql:host=localhost;dbname=runningtag;charset=utf8', 'root', 'ximattEYD1996');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($bd);
}
?>