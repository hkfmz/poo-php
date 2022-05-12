<?php
require "Personnage.php";

class Naruto extends Personnage
{
    public $pouvoir;

    public function __construct($nom, $prenom, $age, $pouvoir){
        Parent::__construct($nom, $prenom, $age);
        $this->pouvoir  = $pouvoir;
    }

    public function description(){
        echo "Le nom: ".$this->getNom()." <br>";
        echo "Le prenom: $this->prenom <br>";
        echo "L'age: ".$this->getAge()." ans<br>";
        echo "Pouvoir: [";
        foreach($this->pouvoir as $i){
            echo " $i,";
        }
        echo "]<br>----------------------------<br>";
    }
}

$n1 = new Naruto("Uzumaki", "Naruto", 24, ["Multiclonage","Boule de feu", "Transformation"]);
$p1 = new Personnage("Barack", "Obama", 52);

$n1->description();
$p1->description();
