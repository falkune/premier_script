<?php
require_once "header.php";
// utilisation de fonction
direBonjour();

// definition d'une fonction
function direBonjour(){
    echo "<p>Bonjour le monde!</p>";
}

// definition de fonction avec parametre
function direBonjourPrenom($prenom){
    echo "<p>Bonjour $prenom </p>";
}

$prenom = "Aziz";
direBonjourPrenom($prenom);

// definir une fonction qu prend un parametre avec une valeur par defaut
function helloPrenom($prenom = "Inconu"){
    echo "<p>Bonjour  $prenom </p>";
}

helloPrenom(); // Bonjour Inconu
helloPrenom("Toto"); // Bonjour Toto
helloPrenom(); // Bonjour Inconu

// definir une fonction qui retourne une valeur
function addition($a, $b){
    $resultat = $a + $b;
    return $resultat;
}

$monResultat = addition(8, 2);
echo $monResultat;


// fuction qui permet de verifier si unmbre donne est paire ou impaire
function estPaire($nb){
    // return $nb % 2 == 0;
    if($nb % 2 == 0){
        return true;
    }
    return false;
}