<?php

use Classes\Ecole;
require_once './Classes/Ecole.php';

echo '<hr><h2>Création des écoles</h2>';

//$ecole = new Ecole();
$ecole = new Ecole('Les prévoyants', '18 Av...', 100, 'Jean DUPONT');
var_dump($ecole);

$ecole2 = new Ecole('Ecole 52', '10 Rue...', 500, 'Xavier N');
var_dump($ecole2);
/*
$ecole->nom = 'Les prévoyants';
$ecole->adresse = '18 Av...';
$ecole->effectif = 100;
$ecole->directeur = 'Jean DUPONT';
var_dump($ecole);
*/

/*
$ecole->setNom('Les prévoyants');
$ecole->setAdresse('18 Av...');
$ecole->setEffectif(100);
$ecole->setDirecteur('Jean DUPONT');
var_dump($ecole);
*/
//unset($ecole);
echo('Ecole 1 = ' . $ecole->getNom() . ' - Ecole 2 = ' . $ecole2->getNom());
