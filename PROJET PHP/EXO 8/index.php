<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXERCICE 8</title>
</head>
<body>
<?php 
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $url = "https"; 
  else
    $url = "http"; 
    
  // Ajoutez // à l'URL.
  $url .= "://"; 
    
  // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
  $url .= $_SERVER['HTTP_HOST']; 
    
  // Ajouter l'emplacement de la ressource demandée à l'URL
  $url .= $_SERVER['REQUEST_URl']; 
      
  // Afficher l'URL
  echo $url; 
?>


</body>
</html>