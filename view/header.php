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
       <?php if (isConnected()) {?> <li><a href="Profil.php" > Mon profil  </a> </li> </li> <?php } ?>
        <li class="tab"><a href="Ajout.php">Ajouter un évènement</a></li>
        <li class="tab"><a href="Ajout_Recette.php">Ajouter une recette</a></li>
          
      </ul>
  </nav>
