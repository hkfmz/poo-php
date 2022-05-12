<?php

class Pays{
    protected $nom;
    protected $drapeau;
    protected $capital;
    protected $monnaie;

    public function __construct($nom, $drapeau, $capital, $monnaie){
        $this->setNom($nom);
        $this->setDrapeau($drapeau);
        $this->setCapital($capital);
        $this->setMonnaie($monnaie);
    }
    // Getters & Setters pour nom
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){

        if($nom == "Envoiré" OR $nom == "envoiré"){
            throw new Exception("Le nom ne doit pas être une insulte ! 🚫");
        }

        if(is_string($nom) AND !intval($nom)){
            $this->nom = $nom;
        }
        else{
            throw new Exception("Le nom ne doit pas être des chiffres ! ❌");
        }
    }

    // Getters & Setters pour drapeau
    public function getDrapeau(){
        return $this->drapeau;
    }
    public function setDrapeau($drapeau){
        if(is_string($drapeau) AND !intval($drapeau) AND $drapeau != "😁"){
            $this->drapeau = $drapeau;
        }
        else{
            throw new Exception("❌ Le nom ne doit pas être des chiffres, ni être cette Emoji -->😁 ");
        }
    }

    // Getters & Setters pour capital
    public function getCapital(){
        return $this->capital;
    }
    public function setCapital($capital){
        if(is_string($capital) AND !intval($capital) AND $capital != "😁"){
            $this->capital = $capital;
        }
        else{
            throw new Exception("❌ Le nom ne doit pas être des chiffres, ni être cette Emoji -->😁 ");
        }
    }

    // Getters & Setters pour monnaie
    public function getMonnaie(){
        return $this->monnaie;
    }
    public function setMonnaie($monnaie){
        if(is_string($monnaie) AND !intval($monnaie) AND $monnaie != "😁"){
            $this->monnaie = $monnaie;
        }
        else{
            throw new Exception("❌ Le nom ne doit pas être des chiffres, ni être cette Emoji -->😁 ");
        }
    }

    public function description(){
        echo "Pays: $this->nom <br>";
        echo "Drapeau: $this->drapeau <br>";
        echo "Capital: $this->capital <br>";
        echo "Monnaie: $this->monnaie <br>";
        echo "----------------------- <br>";
    }
}

class Senegal extends Pays{
    public function __construct($nom, $drapeau, $capital, $monnaie)
    {
        Parent::__construct($nom, $drapeau, $capital, $monnaie);
    }
}

class Italie extends Pays{
    public function __construct($nom, $drapeau, $capital, $monnaie)
    {
        Parent::__construct($nom, $drapeau, $capital, $monnaie);
    }
}

class France extends Pays{
    private $culture;
    private $population;

    public function __construct($nom, $drapeau, $capital, $monnaie, $culture, $population)
    {
        Parent::__construct($nom, $drapeau, $capital, $monnaie);

        $this->setCulture($culture);
        $this->setPopulation($population);
    }

    //Getters & Setters pour culture
    public function getCulture(){
        return $this->culture;
    }
    public function setCulture($culture){

        if(is_string($culture) AND !intval($culture) AND $culture != "😁" AND $culture != ""){
            $this->culture = $culture;
        }
        else{
            throw new Exception("❌ Something wrong detected ! ");
        }
    }

        //Getters & Setters pour population
        public function getPopulation(){
            return $this->population;
        }
        public function setPopulation($population){
    
            if(is_int($population) AND intval($population) AND $population != "😁" AND $population != "" AND $population >=1000000){
                $this->population = $population;
            }
            else{
                throw new Exception("❌ Something wrong detected ! ");
            }
        }

    public function description(){
        echo "Pays:  $this->nom <br>";
        echo "Drapeau: $this->drapeau <br>";
        echo "Capital: $this->capital <br>";
        echo "Monnaie: $this->monnaie <br>";
        echo "Culture: $this->culture <br>";
        echo "Population: $this->population <br>";
        echo "----------------------- <br>";
    }
}

$pays1 = new France("France", "Bleu marine blanc rouge", "Paris", "€uro", "Baguette", 67390000);
$pays2 = new Senegal("Senegal", "Vert jaune rouge", "Dakar", "Franc CFA");
$pays3 = new Italie("Italie", "Vert blanc rouge", "Rome", "€uro");

$pays1->description();
$pays2->description();
$pays3->description();


// $pays1 = new Pays("Brézil", "Vert et jaune", "Rio de Janeiro", "Rial");
// $pays2 = new Pays("Madagascar", "Vert blanc rouge", "Antananarivo", "Ariary");
// $pays3 = new Pays("Egypte", "Noir blanc rouge", "Le Caire", "La Livre Egyptienne");
// $pays4 = new Pays("France", "Bleu marine blanc rouge", "Paris", "€uro");

// $pays4->description();
// $pays1->description();
// $pays2->description();
// $pays3->description();

?>