<?php

class Smartphone {
    public $marque;
    public $model;
    public $couleur;
    public $numeroSerie;

    public function __construct($marque, $model, $couleur, $numeroSerie){
        $this->marque = $marque;
        $this->model = $model;
        $this->couleur = $couleur;
        $this->numeroSerie = $numeroSerie;

        echo "$this->marque $this->model à été créer ! <br>";
    }

    public function appeler($smartphone){
        echo "<br> 📱 Le smartphone de marque: 
        $this->marque de model: 
        $this->model de couleur
        $this->couleur et de numero de serie:
        $this->numeroSerie appelle le smartphone :$smartphone ...<br>";
    }

    public function sonner(){
        echo "<br> 📱 Le smartphone de marque: 
        $this->marque de model: 
        $this->model de couleur
        $this->couleur et de numero de serie:
        $this->numeroSerie sonne...<br>";
    }

    public function allumer(){
        echo "<br> 📱 Le smartphone de marque: 
        $this->marque de model: 
        $this->model de couleur
        $this->couleur et de numero de serie:
        $this->numeroSerie s'allume...<br>";
    }

    public function eteindre(){
        echo "<br> 📱 Le smartphone de marque: 
        $this->marque de model: 
        $this->model de couleur
        $this->couleur et de numero de serie:
        $this->numeroSerie s'éteind...<br>";
    }
}

$smp1 = new Smartphone("Samsung", "S10", "Blanche", "A40YMZ045");
$smp2 = new Smartphone("Huawei", "P2020", "Noir", "A770MZ045");
$smp3 = new Smartphone("Apple", "Iphone 13", "Grise", "77PP5652");

$smp2->allumer();
$smp3->allumer();

$smp2->appeler($smp3->marque);
$smp3->sonner();



?>