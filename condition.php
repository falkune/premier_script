<?php
$age = 18;
// verifier si $age est seperieur a 18
// if($age > 18){
//     echo '<p> vous etes majeur </p>';
// }else{
//     echo '<p> vous etes mineur</p>';
// }

// aficher le texte "vous etes gamin" si age est compris entre 0 et 10 exclu
// afficher le texte "Vous etes ado" si age est entre 10 et 18 exclu
// afficher le text "vous etes majeur" si age est egale ou superieur a 18
if($age < 10){
    echo "<p> vous etes gamin </p>";
}elseif($age >= 10 && $age < 18){
    echo "<p> Vous etes ado </p>";
}else{
    echo "<p>vous etes majeur</p>";
}

$numero_jour = 2;


switch($numero_jour){
    case 1:
        echo "Lundi";
        break;
    case 2:
        echo "Mardi";
        break;
    case 3:
        echo "Mercredi";
        break;
    case 4:
        echo "Jeudi";
        break;
    case 5:
        echo "Vendredi";
        break;
    case 6:
        echo "Samedi";
        break;
    case 7:
        echo "Dimanche";
        break;
    default:
        echo "inconu";
}

// afficher les nombre entre 0 et 5 avec une boucle for
for($i = 0; $i < 6; $i++){
    echo '<p>' . $i . '</p>';
    echo "<p> $i </p>";
}

// afficher les nombre de 0 a 5 avec une boucle while
$i = 0;
while($i <= 5){
    echo '<p>' . $i . '</p>';
    $i++;
}

// afficher les nombre de 0 a 5 avec une boucle do while
$i = 6;
do{
    echo  $i;
    $i++;
}while($i <= 5);

$monTab = array(0,1,2,3);

foreach($monTab as $value){
    echo "<p> $value </p>";
}
