<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 16</title>
</head>
<body>
<?php  
$nombres = array (12,7,4,8,9,10,2,5,3,29,15,33,21,22);
  
foreach($nombres as $element){
   echo $element . '<br />'; 
}

echo " ----------------<br /> ";
$som = array_sum($nombres) ;
$nbr = count($nombres);
$moyenne = $som / $nbr;
echo "<br /> la moyenne est : " .$moyenne;


echo "<br /> ----------------<br /> ";
// combien ont eu 10 + dans un tableau 
function dixouplus ($tab) {
    $fois = 0;
    for ($i=0 ; $i<sizeof($tab) ; $i++) {
      if ($tab[$i]>=10) {
        $fois = $fois + 1;
      }
    }
    echo "$fois ont eu la moyenne\n";
  }
  dixouplus($nombres);


  echo "<br /> ----------------<br /> ";
  // teste si quelqu'un a eu 20
function ya20 ($tab) {
    $i = 0;
    while (($i<sizeof($tab)) && ($tab[$i]!=20)) {
      $i = $i+1;
    }
    if ($i<sizeof($tab)) {
      echo "quelqu'un a eu 20 !\n";
    } else {
      echo "personne n'a eu 20 !\n";
    }
  }
  ya20($nombres); 
  
  echo "<br /> ----------------<br /> ";

  // meilleure note
function notemax ($tab) {
    $max = 0;
    for ($i=0 ; $i<sizeof($tab) ; $i++) {
      if ($tab[$i] > $max) {
        $max = $tab[$i];
      }
    }
    echo "la note maximale est $max\n";
  }
  notemax($nombres);

?>
</body>
</html>