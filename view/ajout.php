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
            <label for="nomorga" data-error="wrong" data-success="right">Nom de l'organisateur</label> </br>
              <input id="nomorga" name="nomorga" type="text" class="validate">
            </div>
        </div>

         <div class="input-field col s9">
            <label for="nomevent" data-error="wrong" data-success="right">Nom de l'évènement</label> </br>
              <input id="nomevent" name="nomevent" type="text" class="validate">
              
            </div>

         <div class="input-field col s9">
            <label for="lieu" data-error="wrong" data-success="right">Lieu de l'évènement</label> </br>
              <input id="lieu" name="lieu" type="text" class="validate">
              
            </div>

        <div class = row>
            <label for="description">Ici vous pouvez rédiger une petite description de votre évènement</label></br>
            <textarea rows="10" cols="50" name="description" id="description"></textarea>
        </div>

        <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light" id="submit" value="valider">Inscription
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>
      </form>

      <?php include ('nav.php') ?>


          <?php require ("view/footer.php");?>
  </body>
</html>