<?php require_once 'controller/Controller_Test_User.php';
      require_once 'model/User.php'; ?>

<link rel="stylesheet" href="css/style.css" />

 <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="Accueil.php" class="brand-logo">RunningTag</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php if (!isConnected()) {?> <li><a href="Connexion.php" > Se connecter  </a> </li> <?php } ?>
      <?php if (isConnected()) {?> <li><a href="Deconnexion.php" > Se déconnecter  </a> </li> <?php } ?>
       
      
        <li><a href="Evenements.php">Voir tous les évènements sportifs !</a></li>
        <li><a href="Articles.php"> Se rendre à la page des articles sportifs !</a></li>
        <li><a href="Recettes.php"> Consulter les recettes !</a></li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
        <?php if (!isConnected()) {?> <li><a href="Connexion.php" > Se connecter  </a> </li> <?php } ?>
      <?php if (isConnected()) {?> <li><a href="Deconnexion.php" > Se déconnecter  </a> </li> <?php } ?>
        <li><a href="Evenements.php">Voir tous les évènements sportifs !</a></li>
        <li><a href="Articles.php"> Se rendre à la page des articles sportifs !</a></li>
        <li><a href="Recettes.php"> Consulter les recettes !</a></li>
      </ul>
    </div>

    <ul class="tabs tabs-transparent">
       <?php if (isConnected()) {?> 
        <li><a class="tabn" href="Profil.php" data-activates="dropdown1" >Mon profil <i class="material-icons right">arrow_drop_down</i> </a> </li> <?php } ?>
        <li class="tab"><a href="Ajout.php">Ajouter un évènement</a></li>
        <li class="tab"><a href="Ajout_Recette.php">Ajouter une recette</a></li>
          
      </ul>
  </nav>

  <ul id="dropdown1" class="dropdown-content">
  <li><a href="Suppression_Evenement.php">Mes évènements</a></li>
  <li><a href="Suppression_Recette.php">Mes recettes</a></li>
</ul>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="jQuery.js"></script>
<script src="materialize/js/materialize.js"></script>
<script>
$( document ).ready(function(){
  $(".dropdown-button").dropdown();
  hover: false ;
})
</script>