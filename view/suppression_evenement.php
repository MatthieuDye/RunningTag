<!DOCTYPE html>

	<html>

		<head>

		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>VOS EVENEMENT</title>

		</head>


			<body>	

			<?php require_once 'model/Pdo.php';
				 require_once 'model/User.php';
				 $id = User::Get_User_Id($_COOKIE['codeconnexion']);

   			$bdRunningTag = connexion();

			 $premier_event = $bdRunningTag->query(" SELECT * from event WHERE '$id'=event.idOrga ");
			 while ($donnees = $premier_event->fetch())
			 {
			  ?>
			  <p> Voici l'évènement n°<?php echo $donnees['idEvt']; ?> , organisé par <?php echo $donnees['orgaEvt']; ?>, à <?php echo $donnees['lieuEvt']; ?></br>
			  <?php echo $donnees['libelleEvt']; ?></br>
			  <?php echo $donnees['commentEvt']; ?></br>
			  
			  </p>	

			<?php
			 } $premier_event->closeCursor(); // Termine le traitement de la requête
			?>		

			<?php include 'nav.php' ?>
			<?php if (isConnected()) include 'nav_Evenements.php' ?>



			<?php include 'footer.php' ?>
			</body>

	</html>