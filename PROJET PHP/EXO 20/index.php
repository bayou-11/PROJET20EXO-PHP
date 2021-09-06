<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
     crossorigin="anonymous">
    <title>EXERCICE 20</title>
</head>
<body class="container">
<?php
$notes_apprenants=array(
'CLARA'=>18,
'DOUDOU'=>15,
'NATACHA'=>10,
'MBAYE'=>16,
'SALIOU'=>11,
'FALLOU'=>14,
'OUSSEYNOU'=>10,
'DEGUENE'=>9,
'MALICK'=>7,
'MBALE'=>9,
'BISSI'=>12
);
$table="<table class='table table-bordered'><thead><tr><th>Nom</th><th>Note</th></tr></thead><tbody>";
echo ("<h2>TABLEAU ASSOCIATIF</h2>");
echo $table;

foreach ($notes_apprenants as $prenom =>$note)
{ 
echo ("<tr><td>".$prenom."</td>"."<td>".$note."</td></tr>");
};
echo("</tbody></table>");
asort($notes_apprenants);
echo ("<h2>TABLEAU CROISSANTE</h2>");
echo $table;

foreach ($notes_apprenants as $prenom =>$note)
{ 
echo ("<tr><td>".$prenom."</td>"."<td>".$note."</td></tr>");
}
echo("</tbody></table>");
arsort($notes_apprenants);
echo ("<h2>TABLEAU DECROISSANTE</h2>");
echo $table;

foreach ($notes_apprenants as $prenom =>$note)
{ 
echo ("<tr><td>".$prenom."</td>"."<td>".$note."</td></tr>");
}
echo("</tbody></table>");
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
 crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"></script>
 
</body>
</html>