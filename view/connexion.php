<!doctype html>
<html lang="fr">
	<head>
		<title>connexion</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Page de connexion ">
		<meta name="Copyright" content="PolytechMontpellier">
		<meta name="Author" content="PolytechMontpellier">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/style.css" />
		 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php require 'header.php'; ?>


	</head>
	<body>
		<div class="container">

			<h5 class="center-align">Saisir vos identifiants</h5>
			
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12" method="post" action="controller/Controller_Connexion.php">					
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
							<button class="btn waves-effect waves-light" type="submit" name="action" value="valider">Connexion
								<i class="material-icons right">send</i>
							</button>
							<a href="Inscription_Externe.php">

							<button class="btn waves-effect waves-light" type="button">
								
									Créer un compte 
								
								
							</button>
							</a> 
							
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<br>
	
		<div class="container">
			<h5 class="center-align">Mot de passe oublié ?</h5>
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12" method="post" action="/controller/Controller_Mot_De_Passe_Oublie.php">
					
					<div class="row">
						<div class="input-field col s9">
							<input id="email" type="email" name="email" class="validate">
							<label for="email" data-error="wrong" data-success="right">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<button class="btn waves-effect waves-light" type="submit" name="action">Valider
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php require 'view/footer.php';?>
  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>