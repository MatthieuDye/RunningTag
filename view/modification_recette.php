<!doctype html>
<html lang="fr">
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php require 'header.php'; ?>

		<title>MODIFICATIONS</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
	<div class="container">

		<?php require_once'model/Pdo.php';
		$idrecipemodif = htmlspecialchars($_POST['idrecipemodif']);

		$bdrunningtag = connexion();

		$eventmodif = $bdrunningtag->query('SELECT * from event WHERE idEvt = "'.$idrecipemodif.'"');
		$donnees = $eventmodif->fetch();
		?>
				<h5 class="center-align">Modifications</h5>

				<div class="container">
				<div class="row z-depth-4 blue-grey lighten-5">

					<form class="col s12" method="post" action="/controller/Controller_Modification_Recette.php">

						<input type="hidden" name="idrecipemodif" value="<?php echo $donnees['idRcpe']?>" />

						<div class="row">
							<div class="input-field col s9">
								<label for="nomrecette" data-error="wrong" data-success="right">Nom de la recette</label>
								<input id="nomrecette" name="nomrecette" type="text" class="validate" value=<?php echo $donnees['titleRcpe'] ?>>
							

						<div class="row">
							<div class="input-field col s9">
								<textarea id="description" name="description" type="description" class="validate" > <?php echo $donnees['contentRcpe'] ?></textarea> 
								<label for="description" data-error="wrong" data-success="right">Description </label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s9">
								<button class="btn waves-effect waves-light" id="submit" value="valider">Modifier
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	
		</div>
		</body>
</html>

<?php require 'footer.php';?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>