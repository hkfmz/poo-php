<?php

class Employe{
    // propriété de la Class Employé
    public $nom;
    public $prenom;
    public $age;
    public $salaire;
    public $role;

    public function __construct($prenom, $nom, $age, $salaire, $role){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->role = $role;
        $this->salaire = $salaire;
    }

    // methode de CLass (Comportement)
    public function sePresenter()
    {
        echo "Je suis $this->prenom $this->nom et j'ai $this->age ans, je suis 
                $this->role et je touche $this->salaire € par mois 😁 <br>";
    }

    public function travailler()
    {
        echo "$this->prenom $this->nom entrain de travailler...<br>";
    }

    public function arreterDeTravailler()
    {
        echo "$this->prenom $this->nom a fini de travailler...<br>";
    }
} 

//instance de la classe employe

// créer une nouvelle instance de la classe Employé = créer un objet

$employe1 = new Employe("Julien", "Cozic", 24, 2300, "Developpeur Front-End");


?>