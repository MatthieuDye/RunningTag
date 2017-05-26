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
<title>ARTICLES</title>

</head>


<body>

</br>
</br>
<?php
  require_once 'model/Pdo.php';
  $bdRunningTag = connexion();

 $premiere_new = $bdRunningTag->query('SELECT * from news');
 while ($donnees = $premiere_new->fetch())
 {
  ?>
  <p> Voici l'article n°<?php echo $donnees['idNews']; ?> </br>
  <?php echo $donnees['titleNews']; ?></br>
  <?php echo $donnees['contentNews']; ?></br>
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


		<?php require 'footer.php';?>
	
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


<a href="http://www.polytech-montpellier.fr/" target="_blank"> <image src="medias/logo.jpeg" > </a>
<h3> <a href="contact.html"> Me contacter !</br> </a> </h3>
</body>

</html>