<?php

namespace Safari\Animaux;

class Lion extends Animal {
    private $niveauAgressivite; //Entre 1 et 10

    public function __construct($nom, $poids)
    {
        parent::__construct($nom, $poids);
    }

    public function crier()
    {
        return "ROAAAAR ! ".$this->nom." rugit férocement.<br>";
    }

    public function chasser()
    {
        return "Le lion part en chasse.<br>";
    }

    /* Getter "niveauAgressivite" */
    public function getNiveauAgressivite()
    {
        return $this->niveauAgressivite;
    }

    /* Setter "EstMalaniveauAgressivitede" */
    public function setNiveauAgressivite($niveauAgressivite)
    {
        if($niveauAgressivite > 0 && $niveauAgressivite < 11){
            $this->niveauAgressivite = $niveauAgressivite;
            return $this->nom." est de niveau d'agressivité ".$this->niveauAgressivite."!<br>";
        }else {
             return "Veuillez donner les bonnes valeurs du niveau d'agressivité de ".$this->nom."!<br>";
        }
    }
}