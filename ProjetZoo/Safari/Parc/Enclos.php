<?php

namespace Safari\Parc;

class Enclos {
    private $animaux;
    private $capaciteMax;
    private $propete;

    public function __construct($capaciteMax)
    {
        $this->animaux = [];
        $this->capaciteMax = $capaciteMax;
    }

    public function ajouterAnimal($nouvelAnimal)
    {
        if( count($this->animaux) >= $this->capaciteMax){
            return "Erreur : Enclos plein !<br>";
        }else {
            $this->animaux[] = $nouvelAnimal;
            return "Bienvenue à ".$nouvelAnimal->getNom()." !<br>";
        }
    }

    public function entretenir()
    {
        $this->propete = "Propre";
        return "Nettoyage en cours...<br>";
    }

    public function visiteGuidée()
    {
        $txt = "Voici les animaux de l'enclos : <br>";
        foreach($this->animaux as $unAnimal){
            $txt .= $unAnimal->crier();
        }
        return $txt."<br>";
    }
}