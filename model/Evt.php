<?php class Evt 
{
	public static function Add_Evt($nom, $organisateur, $commentaire, $lieu) {
		require_once('Pdo.php');

		$bdRunningTag = connexion();

		$req = $bdRunningTag->prepare('INSERT INTO event (libelleEvt, orgaEvt, commentEvt, lieuEvt) VALUES (:nom, :organisateur,:commentaire,:lieu)');
		$req->bindParam(':nom',$nom);
		$req->bindParam(':organisateur',$organisateur);
		$req->bindParam(':commentaire',$commentaire);
		$req->bindParam(':lieu',$lieu);

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