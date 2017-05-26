<?php class Rce 
{
	public static function Add_Rce($nomrecette, $texterecette,$idauteur) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('INSERT INTO recipe (titleRcpe, contentRcpe, idAuthor) VALUES (:nomrecette, :texterecette, :idauteur)');
		$req->bindParam(':nomrecette',$nomrecette);
		$req->bindParam(':texterecette',$texterecette);
		$req->bindParam(':idauteur',$idauteur);

		$returnValue = $req->execute();
		var_dump($returnValue);
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