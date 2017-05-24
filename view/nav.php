<link rel="stylesheet" href="css/style.css" />
<?php require_once 'model/User.php'; ?>

<nav id="menu">
    <ul>
    	<?php if (!isConnected()) {?> <li><a href="Connexion.php" > Se connecter  </a> </li> <?php } ?>
    	<?php if (isConnected()) {?> <li><a href="Deconnexion.php" > Se déconnecter  </a> </li> <?php } ?>
    	<li><a href="Accueil.php" > Retour à l'accueil  </a> </li>
        <li><a href="Evenements.php">Voir tous les évènements sportifs </a></li>
        <li><a href="Articles.php"> Se rendre à la page des articles sportifs !</a></li>
        <li><a href="Recettes.php"> Consulter les recettes !</a></li>
        <li><a href="Contact.php"> Contactez moi !</a></li>
    </ul>
</nav>
