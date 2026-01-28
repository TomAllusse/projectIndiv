<?php

namespace Safari\Animaux;

class Animal {
    protected $nom;
    protected $poids; // En kg
    protected $estMalade; // Boolean

    public function __construct($nom, $poids)
    {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->estMalade = false;
    }

    public function manger()
    {
        return "L'animal mange.<br>";
    }

    public function seSoigner()
    {
        $this->estMalade = false;
        return $this->nom." n'est plus malade !<br>";
    }

    public function crier()
    {
        return $this->nom." fais du bruit !<br>";
    }

    /* Getter "EstMalade" */
    public function getEstMalade()
    {
        if($this->estMalade === true){
            return $this->nom." n'est pas malade !<br>";
        }else {
            return $this->nom." est malade !<br>";
        }
    }

     /* Setter "EstMalade" */
    public function setEstMalade($estMalade)
    {
        $this->estMalade = $estMalade;

        return $this;
    }

    /* Getter "nom" */
    public function getNom()
    {
        return $this->nom;
    }

    /* Setter "nom" */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /* Getter "poids" */
    public function getPoids()
    {
        return $this->poids;
    }

    /* Setter "poids" */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }
}