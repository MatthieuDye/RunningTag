<!DOCTYPE html>

	<html>

		<head>

		<meta charset="utf-8" />
 		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php require 'header.php'; ?>

		<link rel="stylesheet" href="css/style.css" />
		<title>EVENEMENT</title>

		</head>


			<body>	
			<div class="container">
			
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
			
			</div>
			</body>
 
      
	</html>
	<?php include 'footer.php' ?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>