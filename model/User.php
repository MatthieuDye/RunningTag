<?php
class User
{
	public static function Check_Password($userPassword,$userMail)
	//mdpcrypte x user_Mail => bool
	//données : $userPassword string correspondant au mot de passe utilisateur, $userMail string correspondant au mail de l'utilisateur
	//résultat : bool vérifiant si le mot de passe entré correspond bien au mail de l'utilisateur
	{
		require_once('Pdo.php');
		$bdRunningTag=connexion();
	   //connecté à la base de donnée 

		$req = $bdRunningTag->prepare("SELECT passwordUser FROM user WHERE mailUser='".$userMail."'");

		$req->execute();
		$data=$req->fetch();
		$value = current($data);

		//var_dump($userMail);
		
		//var_dump($userPassword);
		
		//var_dump($value);
		
		//var_dump(password_verify($userPassword,$value)); // retourne vrai si les mots de passe correspondent

		return (password_verify($userPassword,$value));
		
	}
	public static function Set_cookieCode($userMail,$userCookieCode)
	//user_Mail x cookieCode => 
	//données : $userMail string correspondant au mail de l'utilisateur, $userCookieCode string correspondant au cookie que l'on souhaite attribuer à l'utilisateur
	//résultat : modifie la base de données en attribuant un code cookie à l'utilisateur dont le mail est passé en entrée
	{
		require_once('Pdo.php');
		$bdRunningTag=connexion();

		$req = $bdRunningTag->prepare("UPDATE user SET cookieCode =:cookie WHERE mailUser=:mail");
		$req->bindParam(':cookie',$userCookieCode);
		$req->bindParam(':mail',$userMail);

		$req->execute();

		$returnValue = $req->execute();
		/*var_dump($returnValue);
		
		if($returnValue) {
			return true;
		}
		else {
			var_dump($req->errorInfo());
			return false;
		}
		*/
	}

	public static function Get_User_Id($userCookieCode)
	//cookieCode => id
	//données : $userCookieCode string correspondant à un code cookie
	//résultat : vérifie si un code cookie existe dans la base de données, et le cas échéant renvoie un int correspondant à l'id de l'utilisateur auquel appartient le code cookie
	{
		require_once('Pdo.php');
		$bdRunningTag=connexion();


		$req = $bdRunningTag->prepare("SELECT idUser FROM user WHERE cookieCode='".$userCookieCode."'");

		$req->execute();
		$data=$req->fetch();

		return $data["idUser"]; //Verifier si null
	}

	public static function Check_Mail($mail)
	//user_Mail => [user]
	//données : string correspondant au mail à vérifier
	//résultat : vérifie si un mail existe dans la base de données, et le cas échéant renvoie un tableau contenant toutes les informations de l'utilisateur auquel est attribué le mail
	{
		require_once('Pdo.php');
		$bdRunningTag=connexion();

		$req = $bdRunningTag->prepare("SELECT * FROM user WHERE mailUser='".$mail."'");
		
		$req->execute();
		$data=$req->fetch();

		return $data;
	}

	public static function Add_User($gender,$name,$firstName,$password,$mail)
	//user_Gender x user_Name x user_First_Name x mdpcrypte x user_Mail =>
	//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
	//résultat : modifie la base de données en ajoutant une entité à la classe "user" en fonction des données entrées
	{
		require_once('Pdo.php');
		$bdRunningTag=connexion();

		$req = $bdRunningTag->prepare('INSERT INTO user(genderUser, lastNameUser, firstNameUser, passwordUser, mailUser) VALUES (:gender, :name,:firstname,:password,:mail)');

		$req->bindParam(':gender',$gender);
		$req->bindParam(':name',$name);
		$req->bindParam(':firstname',$firstName);
		$req->bindParam(':password',$password);
		$req->bindParam(':mail',$mail);


		$returnValue = $req->execute();


		if($returnValue) {
			return true;
		}
		else {
			var_dump($req->errorInfo());
			return false;
		}
	}
	
	
	public static function Get_User($userId){
		require_once('Pdo.php');
		$bdRunningTag=connexion();


		$req = $bdRunningTag->prepare("SELECT * FROM user WHERE idUser = :userId");
		$req->bindParam(':userId',$userId);

		$req->execute();
		$data=$req->fetch();

		return $data; //Verifier si null
	}
	
	public static function Get_User_All(){
		require_once('Pdo.php');
		$bdRunningTag=connexion();


		$req = $bdRunningTag->prepare("SELECT * FROM user");
		$req->execute();
		while($data=$req->fetch())
		{
			$result[] = $data;
		}

		return $result; //Verifier si null
	}
	
	public static function Get_id_From_String($stringWhere){
		require_once('Pdo.php');
		$bdRunningTag=connexion();
		$req = $bdRunningTag->prepare("SELECT idUser FROM user WHERE 1 = 1 ".$stringWhere);
		$req->execute();

		$results = [];
		while($data=$req->fetch())
		{
			$results[] = $data["idUser"];
		}
		return $results; //Verifier si null
	}

	public static function Update_user($name,$firstName,$gender,$mail,$id){
		require_once('Pdo.php');
		$bdRunningTag=connexion();

		$req = $bdRunningTag->prepare('UPDATE user set lastNameUser=:name, firstNameUser =:firstname, genderUser=:gender, mailUser=:mail where idUser=:id');
		$req->bindParam(':gender',$gender);
		$req->bindParam(':name',$name);
		$req->bindParam(':firstname',$firstName);
		$req->bindParam(':mail',$mail);
		$req->bindParam(':id',$id);

		$req->execute();
	}

	public static function Update_Password($id,$mdp){
		require_once('Pdo.php');
		$bdRunningTag=connexion();

		$req = $bdRunningTag->prepare('UPDATE user set passwordUser=:mdp where idUser=:id');
		$req->bindParam(':mdp',$mdp);
		$req->bindParam(':id',$id);

		$req->execute();
	}
}
?>