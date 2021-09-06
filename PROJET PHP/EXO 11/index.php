<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 11</title>
</head>
<body>
<?php
    function estAnneeBissextile($annee)
      {
         $estMultipleDeQuatreCent = ( ($annee % 400) == 0);
         $estMultipleDeQuatre = ( ($annee % 4) == 0);
         $estPasMultipleDeCent = ( ($annee % 100) != 0);      
         return ( $estMultipleDeQuatreCent || ( $estMultipleDeQuatre &&
$estPasMultipleDeCent ) );
      }
      $y = date(2000); // pour les tests modifier manuellement $y
      if(estAnneeBissextile($y))
            $message = $y." est une année bissextile !<br/>";
      else  $message = $y." n'est pas une année bissextile !<br/>";
      echo $message;
 ?>
</body>
</html>