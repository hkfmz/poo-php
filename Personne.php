<?php

//public , private , protected

class Personne {
    private $nom;
    private $prenom;
    private $age;

public function __construct($nom, $prenom, $age) {
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setAge($age);
}

// Nom
public function getNom(){
    return $this->nom;
}
public function setNom($nom){
    if(is_string($nom)){
        $this->nom = $nom;
    }else{
        throw new Exception("Le nom est invalid");
    }
}

// Prenom
public function getPrenom(){
    return $this->prenom;
}
public function setPrenom($prenom){
    if(is_string($prenom)){
        $this->prenom = $prenom;
    }else{
        throw new Exception("Le prenom est invalid");
    }
}

// Age
public function getAge(){
    return $this->age;
}

public function setAge($age){

    if($age > 0 && $age < 120){
        $this->age = $age;
    }
    else if(!is_int($age)){
        throw new Exception("L'age doit être un nombre");
    }
    else{
        throw new Exception("L'age doit être superieur à 1 et inférieur à 120");
    }
    
}

public function presentation(){
    echo " je suis $this->prenom $this->nom et j'ai $this->age ans <br>";
}
public function parler(){
    echo "$this->prenom $this->nom entrain de parler...<br>";
}
public function marcher(){
    echo "$this->prenom $this->nom entrain de marcher...<br>";
}
public function manger(){
    echo "$this->prenom $this->nom entrain de manger...<br>";
}
public function dormir(){
    echo "$this->prenom $this->nom entrain de dormir...<br>";
}

}

$p1 = new Personne("Cozic", "Julien", 27);
$p2 = new Personne("Macron", "Manu", 32);        // 🎃
$p3 = new Personne("Vandamme", "Jean Claude", 51);

$p1->setNom("Trunk");
$p1->setPrenom("John");
$p1->setAge(26);

$p1->presentation();


?>