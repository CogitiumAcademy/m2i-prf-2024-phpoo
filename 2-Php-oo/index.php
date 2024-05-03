<?php

use Classes\Ecole;
use Classes\Eleve;
use Classes\Classe;
require_once './Classes/Ecole.php';
require_once './Classes/Classe.php';
require_once './Classes/Eleve.php';

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

echo '<hr><h2>Création des classes</h2>';

$front = new Classe('Front-End', '1', 'Pierre DURAND', 15, 'Bat1-et1');
$back = new Classe('Back-End', '2', 'Julie MORIN', 20, 'Bat2-et3');
$full = new Classe('Fullstack', '3', 'Clément DUBOIS', 25, 'Bat1-et5');

var_dump($front);
var_dump($back);
var_dump($full);

echo '<hr><h2>Création des élèves</h2>';

$apprenant1 = new Eleve('Sophie', 'RAMI', 32);
$apprenant2 = new Eleve('Pierre', 'REYNAUD', 20);
$apprenant3 = new Eleve('Fred', 'TIRON', 33);
$apprenant4 = new Eleve('Catherine', 'MANJA', 35);
$apprenant5 = new Eleve('Bruno', 'DIKA', 26);
$apprenant6 = new Eleve('John', 'DOE', 35);

var_dump($apprenant1);
var_dump($apprenant2);
var_dump($apprenant3);
var_dump($apprenant4);
var_dump($apprenant5);
var_dump($apprenant6);

echo '<hr><h2>Affectation des élèves dans des classes</h2>';

$full->addEleve($apprenant1);
$back->addEleve($apprenant2);
$front->addEleve($apprenant3);
$back->addEleve($apprenant4);
$front->addEleve($apprenant5);
$full->addEleve($apprenant6);

var_dump($front);
var_dump($back);
var_dump($full);

var_dump($apprenant6);

echo '<hr><h2>Affectation des classes dans des écoles</h2>';

$ecole->addClasse($front);
$ecole->addClasse($back);
$ecole2->addClasse($full);

var_dump($ecole);
var_dump($ecole2);

var_dump($full);

echo '<hr><h2>Affiche le détail d\'une école</h2>';

$e = $ecole2;

# 0. Affiche le nom de l'école
echo '<h3>Ecole : ' . $e->getNom() . '</h3>';

# 1. Récupération des classes de l'école
$classes = $e->getClasses();
//var_dump($classes);

# 2. Affichez la liste des classes à l'aide d'une boucle
echo '<ol>';

foreach ($classes as $classe) {
    
    # Afficher le nom de la classe
    echo '<li>';
    
    //var_dump($classe);
    echo 'Classe : ' . $classe->getNom();

    # 3. Récupérer les élèves
    $eleves = $classe->getEleves();
    //var_dump($eleves);

    # 4. Afficher la liste des élèves
    echo '<ul>';

        foreach ($eleves as $eleve) {
            echo '<li>Elève = ' . $eleve->getNom() . ' ' . $eleve->getPrenom() . '</li>';
        }

    echo '</ul>';

    echo '</li>';
}

echo '</ol>';

echo '<hr><h2>Quelques tests</h2>';

echo "La clase de " . $apprenant1->getNom() . " est : " . $apprenant1->getClasse()->getNom();
echo "<br>";
echo "L'école de la classe " . $full->getNom() . " est : " . $full->getEcole()->getNom();
