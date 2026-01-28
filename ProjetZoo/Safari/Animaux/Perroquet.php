<?php

namespace Safari\Animaux;

class Perroquet extends Animal {
    public function __construct($nom, $poids)
    {
        parent::__construct($nom, $poids);
    }

    public function crier()
    {
        return "Coco veut un gâteau ! ".$this->nom." siffle.<br>";
    }

    public function chasser()
    {
        return "Le perroquet s'envole.<br>";
    }
}