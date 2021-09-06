<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 5</title>
</head>
<body>
    <?php
    $base =$_POST["base"];
    $hauteur =$_POST["hauteur"];  
    $surface = ($base * $hauteur) / 2;
    ?>
    <form action="" method="POST">
    <label> Base </label>
    <input type="text" name="base" value="<?php echo $base; ?>"> <br> <br>
    <label> Hauteur </label>
    <input type="text" name="hauteur" value="<?php echo $hauteur; ?>"> <br> <br>
    <input type="submit" name="calculer"> <br>
     <?php echo "la surface est"  .$surface?> 
     </form>
</body>
</html>