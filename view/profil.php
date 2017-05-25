<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Profil</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Gérez vos informations personnels et modifiez votre mot de passe ">
		<meta name="Copyright" content="PolytechMontpellier">
		<meta name="Author" content="PolytechMontpellier">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="container">
			<ul class="collection with-header">
			    <li class="collection-header"><h4>Vos informations</h4></li>
			    <li class="collection-item"><?php echo $info['firstNameUser'] ?></li>
			    <li class="collection-item"><?php echo $info['lastNameUser'] ?></li>
			    <li class="collection-item"><?php echo $info['genderUser'] ?></li>
			    <li class="collection-item"><?php echo $info['mailUser'] ?></li>
			</ul>
		</div>
		<a href="Modification_User.php" class="waves-effect waves-light btn">Modifier des informations ?</a>
		<?php require 'footer.php';?>
		<?php require 'nav.php';?>

	</body>


</html>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<script src="jQuery.js"></script>
<script src="materialize/js/materialize.js"></script>
<script>
$( document ).ready(function(){
	$(".button-collapse").sideNav();
})
</script>