<!doctype html>
<html lang="fr">
	<head>
		<title>INSCRIPTION</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php require 'header.php'; ?>

		<meta name="Copyright" content="PolytechMontpellier">
		<meta name="Author" content="PolytechMontpellier">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	    <link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="container">
			<h5 class="center-align">Inscription</h5>

			<div class="row z-depth-4 blue-grey lighten-5">

				<form class="col s12" method="post" action="controller/Controller_Inscription.php">

					<div class="row">

						<div class="input-field col s9">
							<input id="name" name="name" type="text" class="validate">
							<label for="name" data-error="wrong" data-success="right">Nom</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s9">
							<input id="firstname" name="firstname" type="text" class="validate">
							<label for="firstname" data-error="wrong" data-success="right">Prénom</label>
						</div>
					</div>

					<div class="input-field col s12">
						<select name="gender" id="gender">
						  <option value="" disabled selected>Entrer votre sexe</option>
						  <option value="Homme">Homme</option>
						  <option value="Femme">Femme</option>
						</select>
					</div>		

					<p>
				      <input name="gender" type="radio" id="Homme" value="Homme" />
				      <label for="Homme">Homme</label>
				    </p>
				    <p>
				      <input name="gender" type="radio" id="Femme" value="Femme" />
				      <label for="Femme">Femme</label>
				    </p>

					<div class="row">
						<div class="input-field col s9">
							<input id="email" name="email" type="email" class="validate">
							<label for="email" data-error="wrong" data-success="right">Email</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s9">
							<input id="password" name="password" type="password" class="validate">
							<label for="password" data-error="wrong" data-success="right">Mot de passe</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s9">
							<input id="password_check" name="password_check" type="password" class="validate">
							<label for="password_check" data-error="wrong" data-success="right">Vérification du mot de passe</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s9">
							<button class="btn waves-effect waves-light" id="submit" value="valider">Inscription
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>

				</form>

			</div>

		</div>

		<?php include 'footer.php' ?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>

