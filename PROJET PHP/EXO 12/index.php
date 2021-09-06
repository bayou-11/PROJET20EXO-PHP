<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXERCICE 12</title>
</head>
<body>
<?php
function recusive( $niveau ){
echo $niveau  ." <br/>";
$niveau--;
if( $niveau > 0 )
recusive ($niveau );
}
recusive( 10 );
?>
</body>
</html>