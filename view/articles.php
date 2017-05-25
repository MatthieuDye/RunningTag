<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>ARTICLES</title>

</head>


<body>
<h1 id="up" > Début du doc </h1>
<a href="#down" > <image src="medias/downarrow.png" ></a>
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

<a href="#up" > <image src="medias/uparrow.png" alt="Cliquez pour retourner au début du doc" title="Vous vous attendiez à quoi?"></a>
</br>
</br>

</br>

</br>

<h1 id="down" > Fin du doc </h1>

		<?php require 'footer.php';?>
	
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


<a href="http://www.polytech-montpellier.fr/" target="_blank"> <image src="medias/logo.jpeg" > </a>
<h3> <a href="contact.html"> Me contacter !</br> </a> </h3>
</body>

</html>