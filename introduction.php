<?php

class Employe{
    // propriété de la Class Employé
    public $nom;
    public $prenom;

    private $age;

    public $salaire;
    public $role;

    public function __construct($prenom, $nom, $age, $salaire, $role){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->setAge($age);
        $this->role = $role;
        $this->salaire = $salaire;
    }

    public function getAge(){
        return $this->$age;
    }

    public function setAge($age){
        $this->age = $age;
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


$employe1 = new Employe("Julien", "Cozic", 33, 3400, "Developpeur Front-End");
$employe1->setAge(34);

$employe1->sePresenter();


?>