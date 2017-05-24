<!DOCTYPE html>

	<html>

		<head>

		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>EVENEMENT</title>

		</head>


			<body>	

			<h1 id="up" > Début du doc </h1>
			<a href="#down" > <image src="medias/downarrow.png" ></a>
			</br>
			</br>	
			<?php require_once 'model/Pdo.php';

   			$bdRunningTag = connexion();

			 $premier_event = $bdRunningTag->query('SELECT * from event');
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

			</br>
			<a href="#up" > <image src="medias/uparrow.png" alt="Cliquez pour retourner au début du doc" title="Vous vous attendiez à quoi?"></a>

			<h1 id="down" > Fin du doc </h1>

			<?php include 'nav.php' ?>
			<?php if (isConnected()) include 'nav_Evenements.php' ?>



			<?php include 'footer.php' ?>
			</body>

	</html>