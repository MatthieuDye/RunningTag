<!doctype html>
<html lang="fr">
	<head>
		<title>MODIFICATIONS</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="container">

	<?php require_once'model/Pdo.php';
	$ideventmodif = htmlspecialchars($_POST['ideventmodif']);

	$bdrunningtag = connexion();

	$eventmodif = $bdrunningtag->query('SELECT * from event WHERE idEvt = "'.$ideventmodif.'"');
	$donnees = $eventmodif->fetch();
	?>
			<h5 class="center-align">Modifications</h5>
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12" method="post" action="/controller/Controller_Modification_Evenement.php">

				<input type="hidden" name="ideventmodif" value="<?php echo $donnees['idEvt']?>" />

					<div class="row">
						<div class="input-field col s9">
							<input id="nomevent" name="nomevent" type="text" class="validate" value=<?php echo $donnees['libelleEvt'] ?>>
							<label for="nomevent" data-error="wrong" data-success="right">Nom de l'évènement</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s9">
							<input id="nomorga" name="nomorga" type="text" class="validate" value=<?php echo $donnees['orgaEvt'] ?>>
							<label for="nomorga" data-error="wrong" data-success="right">Nom de l'organisateur</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s9">
							<input id="lieu" name="lieu" type="text" class="validate" value=<?php echo $donnees['lieuEvt'] ?>>
							<label for="lieu" data-error="wrong" data-success="right">Lieu</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s9">
							<textarea id="description" name="description" type="description" class="validate" value=<?php echo $donnees['commentEvt'] ?>> </textarea> 
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
		<?php require 'footer.php';?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>