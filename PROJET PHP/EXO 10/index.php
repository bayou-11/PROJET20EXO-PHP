<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 10</title>
</head>
<body>
    <?php 
        $tab = array("GNAGNA","VIEUX",0,2,"ALPHA",null);
        $tab = array_filter($tab);
        print_r($tab);
    ?>
</body>
</html>