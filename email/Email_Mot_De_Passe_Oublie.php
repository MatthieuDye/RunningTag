<?php
    $headers ='From: RunningTag Polytech <contact@runningtagweb.fr>'."\n";
    $headers .='Reply-To: contact@runningtagweb.fr'."\n";
    $headers .='Content-Type: text/html; charset="UTF-8"'."\n";
    $headers .='Content-Transfer-Encoding: 8bit';
    $message =' <html>
      <head>
       <title>RunningTag : Reinitialisation du mode de passe</title>
      </head>
      <body>
      <h3>RunningTag : Reinitialisation du mode de passe </h3>

      <p> Vous avez demandé une reinitialisation de mot de passe, merci de cliquer sur le lien suivant pour acceder au formulaire : </p>

      <a href="http://runningtagweb.alwaysdata.net/Changement_Mot_De_Passe.php?code='.$cookie.'">Modifier mon mot de passe</a>
      <p> Ce mail est un mail automatique. </p>
      
      </body>
     </html>';


    mail($mail, 'RunningTag : Reinitialisation du mode de passe',$message, $headers); 
?>