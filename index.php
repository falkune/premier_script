<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
// commentaire 
# commentaire simple
/*
comentaire 
sur 
plusieurs 
lignes
*/
echo "<h1>Bonjour le monde ! </h1>";
$prenom = "toto";
$motDePasse = "passer"; // camelcase
$mot_de_passe = "passer"; // snake case
define("MA_CONSTANTE", "valeur constante");
echo MA_CONSTANTE . "<br>";
echo $prenom . "<br>" ;
?>

<p> <?php echo "Prenom: <strong>". $prenom . "</strong><br> Mot de passe ". $motDePasse ?></p>

<?php
$a = 1;
$b = 5;

$c = $a + $b;
$d = $b - $a;
$e = $a * $b;
$f = $b / $a;
$g = $a % $b;
$h = $b ** $c;

// modification de la valeur de prenom declarer en haut
$prenom = "tata";

$a = $a + $b; // $a+=$b;
$a+=$b;

$a == $b; // verifier l'egalite des valeurs
$a === $b; // verifier l'egalite de type et de valeur
$a != $b; // verifier la difference des valeurs
$a !== $b; // verifier la difference de type et de valeur
$a < $b; // verifie si a est plus petit que b
$a > $b;  // verifie si a est plus grand que b
$a <= $b; // verifie si a est plus petit ou egal a b
$a >= $b;  // verifie si a est plus grand ou egal a b

$a && $b;
$a || $b;
!$a; // si la variable $a n'existe pas
$a xor $b;
?>