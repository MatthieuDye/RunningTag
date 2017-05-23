<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>AJOUT EVNT</title>

</head>

<body>
Créez un évènement !</br>

 <div class="container">
 <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Ajout.php">
        
        <div class="row">
            <div class="input-field col s9">
            <label for="nomrec" data-error="wrong" data-success="right">Nom de la recette</label> </br>
              <input id="nomrec" name="nomrec" type="text" class="validate">
            </div>
        </div>

        <div class = row>
            <label for="description">Rédigez votre recette : </label></br>
            <textarea rows="10" cols="50" name="description" id="description"></textarea>
        </div>

        <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light" id="submit" value="valider">Soumettre
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>
      </form>

      <?php include ('nav.php') ?>


          <?php require ("view/footer.php");?>
  </body>
</html>