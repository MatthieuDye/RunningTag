<!DOCTYPE html>

	<html>

		<head>
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php require 'header.php'; ?>

		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>MES EVENEMENT</title>

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
			  
			  <form class="supprimer" method="post" action="controller/Controller_Suppression_Evenement.php">
			  <input type="hidden" name="ideventsupp" value="<?php echo $donnees['idEvt']?>" />
			  <button class="btn-supprimer" name="supprimer">Supprimer ?</button>
			  </form>
			  </p>	

			  <form class="modifier" method="post" action="../Modification_Evenement.php">
			  <input type="hidden" name="ideventmodif" value="<?php echo $donnees['idEvt']?>" />
			  <button class="btn-modif" name="modifier">Modifier ?</button>
			  </form>
			  </p>	

			<?php
			 } $premier_event->closeCursor(); // Termine le traitement de la requête
			?>		

			<?php include 'nav.php' ?>
			<?php if (isConnected()) include 'nav_Evenements.php' ?>



					<?php require 'footer.php';?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

			</body>

	</html>