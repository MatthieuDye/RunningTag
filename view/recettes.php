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
		<title>RECETTES</title>

		</head>


		<body>
		<div class="container">
		</br>
		</br>
		<?php
		  require_once 'model/Pdo.php';
		  $bdRunningTag = connexion();

		 $premiere_new = $bdRunningTag->query('SELECT * from recipe');
		 while ($donnees = $premiere_new->fetch())
		 {
		  ?>
		  <p> Voici la recette de <?php echo $donnees['titleRcpe']; ?> </br>
		  <?php echo $donnees['contentRcpe']; ?></br>
		  </p>

		<?php
		}

		$premiere_new->closeCursor(); // Termine le traitement de la requête

		?>



		</br>

		</br>

		
		</br>
		</br>

		</br>

		</br>
		</div>
		</body>

	<?php require 'footer.php';?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
		</body>

	</html>