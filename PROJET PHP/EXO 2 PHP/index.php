<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 2</title>
</head>
<body>

    
    <!-- // if((isset($_POST['nbMin'])) || (isset($_POST['nMax'])))
    // {
    //     $min=1;
    //     $max=10;
    //     $min=$_POST['nbMin'];
    //     $max=$_POST['nbMax'];
    //     $loto = rand($min,$max);
    //     echo $loto;
    // }
    // else 
    // {
    //     echo "entrer des nombres";
    // } -->
    

    <!-- <form action="index.php" method="POST">
    <label> nombre min</label>
    <input type="text" name="nbMin">

    <label> nombre max</label>
    <input type="text" name="nbMax">

    <input type="submit">
    </form> --> 

    <?php
    // Exo2
if (!isset($_POST['reponse']) AND !isset($_POST['counter']))
	{
		$rand = rand(1,10);
		$cnt = 10;
		echo 'Bienvenue sur le chiffre mystére!!! <br/>
		Vous aves 10 coups pour trouver le nombre mystére compris entre 0 et 1000 <br/>';
	}
	else if (isset($_POST['reponse']) AND empty($_POST['reponse']))
	{
		$rand 	= $_POST['random'];
		$cnt 	= $_POST['counter'];
		echo 'Mettez une valeur !<br/>';
	}
	else
	{
		$rand 	= $_POST['random'];
		$cnt 	= $_POST['counter'];
		$number	= $_POST['reponse'];
		if (preg_match('![0-9]!', $number))
		{
			$cnt--;
		
			if ($number > $rand)
				echo 'le nombre a trouvé doit etre plus petit! <br/>';
			else if ($number < $rand)
				echo 'le nombre a trouvé doit etre plus grand! <br/>';
			else if ($number == $rand)
			{
				echo 'gagné!!!<br/>';
				echo '<a href="index.php">Voulez-vous rejouer?</a> ';
				exit ();
			}
		}
		else
		{
			echo 'Votre réponse ne doit contenir que des chiffres !!!<br/>';
		}
	}
	
	if ($cnt > 0)
	{
		echo
		'Vous avez encore ' . $cnt . ' coups à jouer
		<form method="post" name="lol">
			<input type="text" name="reponse" />
			<input type="hidden" name="counter" value="'. $cnt .'" />
			<input type="hidden" name="random" value="'. $rand .'" />
			<input type="submit" value="envoye" />
		</form>';
		
	}
	else
	{
		echo 'Vous avez perdu ! Le nombre secret était ' . $rand . ' !<br/>';
		echo '<a href="index.php">Voulez-vous rejouer?</a> ';
	}
    ?>
</body>
</html>