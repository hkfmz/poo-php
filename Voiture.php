<?php

class Voiture {
    public $marque;
    public $nomFabriquant;
    public $model;
    public $couleur;

    //$marque, $nomFabriquant, $model
    public function __construct($marque, $nomFabriquant, $model, $couleur) {
        $this->marque = $marque;
        $this->nomFabriquant = $nomFabriquant;
        $this->model = $model;
        $this->couleur = $couleur;
    }

    public function demarrer(){
        echo "La voiture de marque $this->marque fabriqué par $this->nomFabriquant de model $this->model et de couleur $this->couleur démarre...<br>";
    }
}

$voiture1 = new Voiture("TOYOTA", "Cyril", "Toyota Camry", "Violet"); // créer un objet voiture...
$voiture2 = new Voiture("SUZUKI", "Cyril", "MT 300", "Magenta"); // créer un objet voiture...

$voiture1->demarrer();




// $voiture1->demarrer("Jaune");


?>