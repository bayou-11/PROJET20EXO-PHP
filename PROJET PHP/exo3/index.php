<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="">
                <div class="form-group">
                  <label for="">Nom</label>
                  <input type="text" name="nom" placeholder="nom" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Salaire</label>
                  <input type="number" name="salaire" placeholder="salaire brut" class="form-control" >
                </div>
                <div class="form-group" style="margin-bottom:10px; margin-top:10px">
                  <label for="">Genre</label> <br>
                <b> M</b> <input type="radio" name="sex" value="masculin" > &nbsp;&nbsp;&nbsp;&nbsp;
                <b> F</b> <input type="radio" name="sex" value="feminin" >
                </div>
                <div class="form-group">
                  <label for="">Nombre de personne de charge</label>
                  <input type="number" name="nbPersonne_charge" placeholder="nombre de personne en charge" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="valider" class="btn btn-info btn-larg mt-4"> valider</button>
                </div>
            </form>
        </div>
    </div>
</div>
            <?php
                if(isset($_POST['valider']) and isset($_POST['sex']) ) {
                    $nom= $_POST['nom'];
                    $salaire_brut= $_POST['salaire'];
                    $sexe= $_POST['sex'];
                    $nbPersonne_charge= $_POST['nbPersonne_charge'];
                    $frais=$salaire_brut*30/100;
                    if($sexe=="feminin"){
                        $reduction=$salaire_brut*2/100;
                    }
                    if($nbPersonne_charge==3){
                        $reduction+=$salaire_brut*1/100;
                    }
                    if($nbPersonne_charge==4){
                        $reduction+=$salaire_brut*2/100;
                    }
                    $total_recu=$salaire_brut+$reduction-$frais;
                    ?>
                    
                     <div class="container">
                      <div class="row">
                        <div class="col-md-6 offset-md-3">
                         <p> <?php echo  $nom." salaire bruit ".$salaire_brut." frais ".$frais." reduction ".$reduction." TOTAL =".$total_recu ;   ?> </p>
                        </div>
                      </div>
                     </div>
                     
                    <?php
                }
           
            ?>
  
</body>
</html>