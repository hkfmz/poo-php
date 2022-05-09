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


$employe2 = new Employe("Evelain", "Tengue", 27, 4000, "Assistant Dev");

$employe3 = new Employe("Aminata", "B", 28, 4700, "Assistante Dev");

$employe4 = new Employe("Ysuf", "Abdul", 28, 4600, "Directeur RH");

// $employe1->sePresenter();
// $employe2->sePresenter();
// $employe3->sePresenter();

$employe1->travailler();

$employe1->arreterDeTravailler();

$employe1->sePresenter();


// // Employe 1
// $nom1 = "Cozic";
// $prenom1 = "Julien";
// $age1 = 24;
// $sal= 2300;
// $role1 = "Developpeur Front-End";

// // Employe 2
// $nom2 = "Mongreville";
// $prenom2 = "Cyril";
// $age2 = 26;
// $salaire2 = 8500;
// $role2 = "Developpeur IA";

// // Employe 3
// $nom2 = "Mongreville";
// $prenom2 = "Cyril";
// $age2 = 26;
// $salaire2 = 8500;
// $role2 = "Developpeur IA";

// function sePresenter($prenom, $nom, $age, $salaire, $role)
// {
//     echo "Je suis $prenom $nom et j'ai $age ans, je suis 
//             $role et je touche $salaire € par mois 😁 <br>";
// }

// sePresenter($prenom1, $nom1, $age1, $salaire1, $role1);
// sePresenter($prenom2, $nom2, $age2, $salaire2, $role2);


?>