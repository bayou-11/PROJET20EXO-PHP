<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 18</title>
</head>
<body>
<?php

   
    // /* on compte jusqu'à 100*/

 for ($i=1 ; $i<=8 ; $i++) { /* boucle de 1 à 100 */
   echo "*\n"; /* affiche de $i et passage à la ligne */
    }    
 echo "\n";

    echo "<br/> ----------------<br/> ";
        /* une ligne d'étoiles et passage à la ligne */
        for ($i=1 ; $i<=8 ; $i++) {
            echo "* * * * * * * *\n <br /> ";
    }
    echo "\n";


    echo "<br/> ----------------<br/> ";
    $taille = 10; 
    for ($i = 1; $i <= $taille; $i++){ 
         for ($k = 1; $k <= $i; $k++){
              echo "*";
         }
         echo '<br />';
    }

    echo "<br/> ----------------<br/> ";
    $taille = 1; 
    for ($i = 1; $i >= $taille; $i++){ 
         for ($k = 10; $k >= $i; $k--){
              echo "*";
         }
         echo '<br/>';
    }

?>

</body>
</html>