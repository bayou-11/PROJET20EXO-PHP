<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 13</title>
</head>
<body>
<?php 
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
      echo "la page est appelée depuis ‘HTTPS";
  }else{
      echo "la page est appelée depuis ‘HTTP";
  }
  
?> 
</body>
</html>