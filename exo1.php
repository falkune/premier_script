<?php
include_once "header.php";
$mois = "Janvier";
// $moi = date("n");
include "fonction.php";

switch($mois){
    case "Janvier":
    case "decembre":
    case "fevrier":
        echo "hiver";
        break;
    case "Mars":
    case "Avril":
    case "Mai":
        echo "printemps";
        break;
    case "Juin":
    case "Juillet":
    case "Aout":
        echo "été";
        break;
    case "Septembre":
    case "Octobre":
    case "Novembre":
        echo "automne";
        break;
    default:
        echo "ce mois n'existe pas";
}

$prixDepart = 150;
$newPrice = null;
if($prixDepart >= 100){
    $newPrice = $prixDepart - ($prixDepart * 0.1);
    // $newPrice = $prixDepart * 0.9;
}

$nombre = 5;
if($nombre % 2 == 0){
    echo "<p> Le nombre $nombre est paire </p>";
}else{
    echo "<p> Le nombre $nombre est impaire </p>";
}

$nbrGrain = 0;

for($i = 0; $i < 64; $i++){
    echo "<p> Le nombre de grains sur la cage numero " . $i+1 ." est de : " . 2 ** $i ." </p>";
    $nbrGrain = $nbrGrain + 2 ** $i;
}
?>

<?php for($i = 0; $i < 64; $i++) { ?>
    <p>
        Le nombre de grains sur la cage numero <?= $i+1 ?> 
        est de : <?= 2 ** $i ?>
    </p>
<?php } ?>

echo "<p> Le nombre total de grains est de : $nbrGrain </p>";
$poid = $nbrGrain / 3500;
echo "<p> Le poid total du riz est de : $poid </p>";
