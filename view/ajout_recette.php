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
<title>AJOUT EVNT</title>

</head>

<body>
Rédigez une recette !</br>

 <div class="container">
 <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Ajout_Recette.php">
        
        <div class="row">
            <div class="input-field col s9">
            <label for="nomrce" data-error="wrong" data-success="right">Nom de la recette</label> </br>
              <input id="nomrce" name="nomrce" type="text" class="validate">
            </div>
        </div>

        <div class = row>
            <label for="contentrce">Rédigez votre recette : </label></br>
            <textarea rows="10" cols="50" name="contentrce" id="contentrce"></textarea>
        </div>

        <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light" id="submit" value="valider">Soumettre
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>
      </form>
      </div>
 </div>
  </body>


</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

          <?php require 'view/footer.php';?>