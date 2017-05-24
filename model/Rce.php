<?php class Rce 
{
	public static function Add_Rce($nomrecette, $texterecette) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('INSERT INTO recipe (titleRcpe, contentRcpe) VALUES (:nomrecette, :texterecette,)');
		$req->bindParam(':nomrecette',$nomrecette);
		$req->bindParam(':texterecette',$texterecette);
		

		$returnValue = $req->execute();
		//var_dump($returnValue);
		/*
		if($returnValue) {
			return true;
		}
		else {
			var_dump($req->errorInfo());
			return false;
		}
		*/
	}
}