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
	public static function Delete_Rce($idrecette ,$idauteur) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('DELETE from recipe WHERE idAuthor = :idauteur && idRcpe = :idrecette ' );

		$req->bindParam(':idauteur',$idauteur);		
		$req->bindParam(':idrecette',$idrecette);
		
		$returnValue = $req->execute();
		/*
		if($returnValue) {
			return true;
		}
		else {
			
			return false;
		}
		*/
	}

		public static function Update_Rce($nomrecette, $texterecette,$idrecette) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('UPDATE recipe SET titleRcpe = :nomrecette, contentRcpe = :texterecette WHERE idRcpe = :idrecette');

		$req->bindParam(':nomrecette',$nomrecette);
		$req->bindParam(':texterecette',$texterecette);
		$req->bindParam(':idrecette',$idrecette);
		
		$returnValue = $req->execute();
		/*
		if($returnValue) {
			return true;
		}
		else {
			
			return false;
		}
		*/
	}
}