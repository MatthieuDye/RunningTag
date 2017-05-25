<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>AJOUT EVNT</title>

</head>

<body>
Rédigez un article !</br>

 <div class="container">
 <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Ajout.php">
        
        <div class="row">
            <div class="input-field col s9">
            <label for="nomaut" data-error="wrong" data-success="right">Nom de l'auteur</label> </br>
              <input id="nomaut" name="nomaut" type="text" class="validate">
            </div>
        </div>

         <div class="input-field col s9">
            <label for="nomnews" data-error="wrong" data-success="right">Nom de l'évènement</label> </br>
              <input id="nomnews" name="nomnews" type="text" class="validate">
              
            </div>

        <div class = row>
            <label for="description">Rédigez votre article : </label></br>
            <textarea rows="10" cols="50" name="description" id="description"></textarea>
        </div>

        <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light" id="submit" value="valider">Envoyer
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>
      </form>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


          <?php require 'view/footer.php';?>
  </body>
</html>