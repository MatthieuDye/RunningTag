<?php class Evt 
{
	public static function Add_Evt($nom, $organisateur, $commentaire, $lieu,$idauteur) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('INSERT INTO event (libelleEvt, orgaEvt, commentEvt, lieuEvt, idOrga) VALUES (:nom, :organisateur,:commentaire,:lieu, :idauteur)');
		$req->bindParam(':nom',$nom);
		$req->bindParam(':organisateur',$organisateur);
		$req->bindParam(':commentaire',$commentaire);
		$req->bindParam(':lieu',$lieu);
		$req->bindParam(':idauteur',$idauteur);

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

	public static function Delete_Evt($idevent ,$idauteur) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('DELETE from event WHERE idOrga = :idauteur && idEvt = :idevent ' );

		$req->bindParam(':idauteur',$idauteur);		
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