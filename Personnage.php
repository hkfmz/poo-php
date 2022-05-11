<?php

class Personnage {
    private $nom;
    public $prenom;
    private $age;

    public function __construct($nom, $prenom, $age) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
    }
    //Nom
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom) {
        if(is_string($nom) AND $nom != '' AND !intval($nom))
        {
            $this->nom = $nom;
        }else{
            throw new Exception('Le nom n\'est pas valide !');
        }
    }

    //Prenom
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    // Age
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        if(intval($age) AND !is_string($age) AND $age >= 18  AND $age <= 120){
            $this->age = $age;
        }else{
            throw new Exception("Invalid age");
        }
    }

    public function description(){  
        echo "Le nom:$this->nom <br>";
        echo "Le prenom: $this->prenom <br>";
        echo "L'age: $this->age ans<br>";
        echo "----------------------------<br>";
    }
}

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


?>