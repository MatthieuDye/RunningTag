<!doctype html>
<html lang="fr">
	<head>
		<title>Inscription</title>
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
			<h5 class="center-align">Vous possédez un code classe ?</h5>
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12" method="post" action="Inscription_Classe.php">	
					<div class="row">
						<div class="input-field col s9">
							<input id="code" name="code" type="text" class="validate">
							<label for="code" data-error="wrong" data-success="right">Code</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							<button class="btn waves-effect waves-light" type="submit" name="action">Valider
								<i class="material-icons right">send</i>
							</button>
							
							<a class="btn waves-effect waves-light" href="Inscription_Externe.php">
									Je n'ai pas de code classe
							</a> 
								
							
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