<?php

// Import les classes
// require_once 'mesClasses/Arme.php';
// require_once 'mesClasses/ArmeBlanche.php';

// require_once 'mesClasses/Arc.php';
// require_once 'mesClasses/Couteau.php';
// require_once 'mesClasses/Hache.php';

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class).'.php';
    if(file_exists($file)) require $file; /* require 'MonJeu/Materiel/Baguette.php' */
});

/* Import des animaux */
use Safari\Animaux\Animal;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;

/* Import du parc */
use Safari\Parc\Enclos;

/* Création */
$unEnclos = new Enclos(3);
$unLion = new Lion("Simba",150);
$perroquet1 = new Perroquet("Rio",2);
$perroquet2 = new Perroquet("Jago",3);
$unCheval = new Animal("Jack",100);

/* Ajout de 4 animaux pour voir si le quatrième est bien refusé */
echo $unEnclos->ajouterAnimal($unLion);
echo $unEnclos->ajouterAnimal($perroquet1);
echo $unEnclos->ajouterAnimal($perroquet2);
echo $unEnclos->ajouterAnimal($unCheval);

/* sauter une ligne */
echo "<br>";

/* Lancement de la visite guidée */
echo $unEnclos->visiteGuidée();

/* Faisons tomber le Lion malade avec le setter */
/* Affiche le status du Lion */
echo $unLion->getEstMalade();
$unLion->setEstMalade(true);
/* Affiche le status du Lion */
echo $unLion->getEstMalade();
/* Soigne le Lion */
echo $unLion->seSoigner();

/* sauter une ligne */
echo "<br>";

/* Test ajout du niveau d'agressivité pour le Lion (Au-dessus et en-dessous du seuil de niveau autorisé) */
echo $unLion->setNiveauAgressivite(12);
echo $unLion->setNiveauAgressivite(0);

/* Test ajout du niveau d'agressivité pour le Lion */
echo $unLion->setNiveauAgressivite(2);