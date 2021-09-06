<!DOCTYPE html>
<html lang="en"> 
<head>
<style>
body,{
    text-align:center;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>EXERCICE 19</title>
</head>
<body>
<?php

$mois = [
    "janvier"   => 31,
    "février"   => 28,
    "mars"      => 31,
    "avril"     => 30,
    "mai"       => 31,
    "juin"      => 30,
    "juillet"   => 31,
    "août"      => 31,
    "septembre" => 30,
    "octobre"   => 31,
    "novembre"  => 30,
    "décembre"  => 31
  ];
  echo' <div class="container">
   <h2>CALENDRIER</h2>
   <table class="table">
      <thead>
         <tr>
            <th>Mois</th>
            <th>Nombre de jours</th>
         </tr>
      </thead>
      <tbody>';
  foreach($mois as $clef => $valeur){
    echo '<tr>';
    echo"<td>".$clef."</td>";
    echo"<td>".$valeur."</td>";
    echo '<tr>';
  }
  echo '</tbody>
  </table>
  </div>';
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>