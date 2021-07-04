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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
// Exo1
echo "hello word";


/*===============================================================================================================================================*/
// Exo2
if (!isset($_POST['reponse']) AND !isset($_POST['counter']))
	{
		$rand = rand(1,10);
		$cnt = 10;
		echo 'Bienvenue sur le chiffre myst�re!!! <br/>
		Vous aves 10 coups pour trouver le nombre myst�re compris entre 0 et 1000 <br/>';
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
				echo 'gagnnnnnnnnnnnnnnnne!!!<br/>';
				echo '<a href="exo.php">Voulez-vous rejouer?</a> ';
				exit ();
			}
		}
		else
		{
			echo 'Votre r�ponse ne doit contenir que des chiffres !!!<br/>';
		}
	}
	
	if ($cnt > 0)
	{
		echo
		'Vous avez encore ' . $cnt . ' coups � jouer
		<form action="exo.php" method="post" name="lol">
			<input type="text" name="reponse" />
			<input type="hidden" name="counter" value="'. $cnt .'" />
			<input type="hidden" name="random" value="'. $rand .'" />
			<input type="submit" value="envoye" />
		</form>';
		
	}
	else
	{
		echo 'Vous avez perdu ! Le nombre secret etait ' . $rand . ' !<br/>';
		echo '<a href="exo.php">Voulez-vous rejouer?</a> ';
	}



/*===============================================================================================================================================*/
// Exo3

/*===============================================================================================================================================*/
// Exo4
function incrémentation($nombre){
    $nombre++;
    echo"$nombre";
}
incrémentation(120);


/*===============================================================================================================================================*/
// Exo5
function surface($valeur1,$valeur2){
    $surface= ($valeur1* $valeur2) / 2;
    echo "la surface du rectangle est egale a" .$surface."m2";;
}
echo'Veuillez entree la base et hauteur du triangle
	<form action="exo.php" method="post" ">
	<input type="number" name="base" placeholder="base" />
	<input type="number" name="hauteur" placeholder="hauteur" />
	<input type="submit" value="envoye" />
    <input type="reset" value="effacer">
	</form>';

$base=$_POST['base'];
$hauteur=$_POST['hauteur'];
surface($base,$hauteur);


/*===============================================================================================================================================*/
// Exo6
echo'Veuillez entree les trois valeurs demander
	<form action="exo.php" method="post" ">
    <input type="number" name="nombre1" placeholder="saisir un nombre" />
 	<input type="number" name="nombre2" placeholder="saisir un nombre" />
     <input type="number" name="nombre3" placeholder="saisir un nombre" />
 	<input type="submit" value="envoye" />
    <input type="reset" value="effacer">
 	</form>';
     $valeur1=$_POST['nombre1'];
     $valeur2=$_POST['nombre2'];
     $valeur3=$_POST['nombre3'];
     echo"le plus grand nombre est ". (max($valeur1,$valeur2,$valeur3) . "<br>");
// /*===============================================================================================================================================*/

// Exo7
  $tab=array('moussa','demba','ansou','moustapha','babacar','matar','samba');
  echo $tab[0];

/*===============================================================================================================================================*/

// Exo8

/*===============================================================================================================================================*/

// Exo9
function nombreDeMot($phrase){
         $NunbMot=str_word_count($phrase);
        echo "Le nombre de mot contenue dans cette phrase est de " . $NunbMot ;
     }
//      nombreDeMot("je suis fiere de vous");
// /*===============================================================================================================================================*/

// Exo10
$flowers = array(
    "Rose",
    "Lili",
    "Jasmine",
    0,
    "Hibiscus",
    "",
    "Tulip",
    null,
    "Sun Flower",
    "Daffodil",
    "Daisy");

 $flower = array_filter($flowers);
  var_dump($flower) ;
// Exo11
/*===============================================================================================================================================*/

function bissextile($annee) {
	if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
		// Année bissextile
		return TRUE;
	} else {
		// Année NON bissextile
		return FALSE;
	}
}

// Exo12
/*===============================================================================================================================================*/

  function decrement($n) 
  {
    if($n > 0)
    {
      print("$n\n");
      decrement($n - 1);
    }
  }
  decrement(10);

// Exo13
/*===============================================================================================================================================*/

if (!empty($_SERVER['HTTPS'])) 
  {
     echo 'HTTPS est utilisé';
  }
  else
  {
      echo 'HTTP est utilisé';
  }
/*===============================================================================================================================================*/

// Exo14
header('Location: https://www.linkedin.com/feed/');
/*===============================================================================================================================================*/

// Exo15
$tab = array(1, 2, 2, 3, 3, 3, 4, 5, 5);
print_r(array_values(array_unique($tab)));
/*===============================================================================================================================================*/

// Exo16
function show_tableau($tab){
    foreach ($tab as $val) {
        if (is_array($val)) {
           show_tableau($val);
         } else {
           echo $val . '<br />';
         } 
       } 
      } 
      
$tableau=array(12,17,18,5,17);
echo"les notes  sont <br> ";
show_tableau($tableau);

$moyenne = array_sum($tableau)/count($tableau);
echo"La moyenne des notes est de :" . $moyenne . "<br>";


function onteulamoyenne ($t) {
    $fois = 0;
    for ($i=0 ; $i<sizeof($t) ; $i++) {
      if ($t[$i]>=10) {
        $fois = $fois + 1;
      }
    }
    echo "$fois ont eu la moyenne <br>";
  }
  onteulamoyenne ($tableau);

  function Existe20 ($t) {
    $i = 0;
    while (($i<sizeof($t)) && ($t[$i]!=20)) {
      $i = $i+1;
    }
    if ($i<sizeof($t)) {
      echo "quelqu'un a eu 20 ! <br>";
    } else {
      echo "personne n'a eu 20 ! <br>";
    }
  }
  Existe20 ($tableau);

  function MeillieurNote ($t) {
    $max = 0;
    for ($i=0 ; $i<sizeof($t) ; $i++) {
      if ($t[$i] > $max) {
        $max = $t[$i];
      }
    }
    echo "La meilleur note est :" .$max. "<br>";
  }
  MeillieurNote($tableau);
// /*===============================================================================================================================================*/

// // Exo17
  $tab = array(15,18,14,16,12,17,13);
  if(in_array(15,$tab)){
  echo 'ce numero se trouve dans le tableau';
  }else{
  echo 'ce numero ne se trouve pas dans le tableau';
}
 // programmer un tri à bulles,
echo "Avant:";
for($K = 0; $K < count($Tab); $K++) {
 echo  $Tab[$K].", ";
}
 
for($I = count($Tab) - 2;$I >= 0; $I--) {
 for($J = 0; $J <= $I; $J++) {
  if($Tab[$J + 1] < $Tab[$J]) {
   $t = $Tab[$J + 1];
   $Tab[$J + 1] = $Tab[$J];
   $Tab[$J] = $t;
  }
 }
}
 
echo "<br />Après:";
for($L = 0; $L < count($Tab); $L++) {
  echo $Tab[$L].", ";
}
 // programmer par insertion
function Tri_insrt($liste, $taille )
{
    for($i = 0; $i < $taille; $i++)
    {
        $element_a_inserer = $liste[$i];
        for($j = 0; $j < $i; $j++)
        {
            $element_courant = $liste[$j];
            if ($element_a_inserer < $element_courant)
            {
                $liste[$j] = $element_a_inserer;
                $element_a_inserer = $element_courant;
            }  
        }
        $liste[$i] = $element_a_inserer;
    }
}

/*===============================================================================================================================================*/
// Exo18

/*===============================================================================================================================================*/
// Exo19
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

/*===============================================================================================================================================*/
// Exo20
$Note_apprenant = [
 "Mouhamed"=> 12,
  "Ahmed"  => 18,
  "Rafika" => 15,
  "Aicha"  => 9,
  "Samir"  => 12,
  "Samsar" => 10,
  "Rafik"  => 11,
  "Samiha" => 10,
  "fourat" => 30,
  "Sami"   => 10,
  "Noura"  => 16
];
$Note_apprenant["Naim"]=10;
$Note_apprenant["Naima"]=12;
$Note_apprenant["Nsib"]=10;
sort($Note_apprenant);//ordre alphabetique;
echo' <div class="container">
<h2>Tableau des notes</h2>
<table class="table">
   <thead>
      <tr>
         <th>clé</th>
         <th>Valeur</th>
      </tr>
   </thead>
   <tbody>';
   foreach($Note_apprenant as $key=>$val){
    echo '<tr>';
    echo"<td>".$key."</td>";
    echo"<td>".$val."</td>";
    echo '<tr>';
   }
      
   echo '</tbody>
</table>
</div>';

echo"le plus grand note est ".
 (max ($Note_apprenant))."<br>";
 echo"le plus petit note est ".
 (min ($Note_apprenant));
/*===============================================================================================================================================*/
 ?>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

    


    

 
