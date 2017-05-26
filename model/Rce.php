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

		$req = $bdRunningTag->prepare('DELETE from recipe WHERE idAuthor = :idauteur && idRce = :idrecette ' );

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

		public static function Update_Evt($nomevent,$nomorga,$description,$lieu,$idevent) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('UPDATE event SET libelleEvt = :nomevent, orgaEvt = :nomorga, lieuEvt = :lieu, commentEvt = :description WHERE idEvt = :idevent');

		$req->bindParam(':nomevent',$nomevent);
		$req->bindParam(':nomorga',$nomorga);
		$req->bindParam(':description',$description);
		$req->bindParam(':lieu',$lieu);
		$req->bindParam(':idevent',$idevent);
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