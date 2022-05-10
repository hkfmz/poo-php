<?php

class Fruit{
    private $nom;
    private $gout;
    private $couleur;
    private $prix;

    public function __construct($nom, $gout, $couleur, $prix){
        $this->setNom($nom);
        $this->gout = $gout;
        $this->couleur = $couleur;
        $this->setPrix($prix);
    }
// prix
    public function getPrix(){
        return $this->prix;
    }
    public function setPrix($prix){
        if($prix >= 2 AND $prix <= 50){
            $this->prix = $prix;
        }else{
            throw new Exception("Le prix ne doit pas être inférieur à 2€ ni supérieur à 50€.");
        }
    }
//Nom
public function getNom(){
    return $this->nom;
}
public function setNom($nom){
    if(is_string($nom)){
        $this->nom = $nom;
    }else{
        throw new Exception("Nom invalid !");
    }
}


    public function description(){  
        echo "Le fruit:$this->nom <br>";
        echo "Le goût: $this->gout <br>";
        echo "La couleur: $this->couleur <br>";
        echo "Le prix: $this->prix €/Kg<br>";
        echo "----------------------------<br>";
    }

}

echo "<mark>Le prix ne doit pas être inférieur à 2€ 
ni supérieur à 50€. </mark><br><hr>";

$f1 = new Fruit("Kiwi 🥝","Acide","Vert marron", 5);
$f2 = new Fruit("Citron 🍋","Acide","Vert citron", 5);
$f3 = new Fruit("Grenade ","Sucré","Rouge foncé", 3);

$f1->setPrix(8);


$f1->description();
$f2->description();
$f3->description();


?>