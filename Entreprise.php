<?php
//❌ accolade
interface obligationsForEntreprises{
    public function description();
    public function payerImpotEtTaxe($confirmation);
}

abstract class Entreprise implements obligationsForEntreprises{
    protected $nom;
    protected $chiffreAffaire;
    protected $confirmation;

    public function __construct($nom, $chiffreAffaire, $confirmation){
        $this->setNom($nom);
        $this->setChiffreAffaire($chiffreAffaire);
        $this->setConfirmation($confirmation);
    }
    //nom
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    //Confirmation
    public function getConfirmation(){
        return $this->confirmation;
    }



    public function setConfirmation($confirmation){
        if(is_bool($confirmation)){
            $this->confirmation = $confirmation;
        }else{
            throw new Exception("🟠 La confirmation doit être un booleen !");
        }
    }
    
abstract public function contrat($signature);
    //chiffreAffaire
    public function getChiffreAffaire(){

        $price = $this->chiffreAffaire;

        return number_format($price, 2, ',', ' ') . ' €';
    }
    public function setChiffreAffaire($chiffreAffaire){
        $this->chiffreAffaire = $chiffreAffaire;
    }

    public function description(){
        echo "Entreprise: ".$this->getNom()." <br>";
        echo "Chiffre d'affaire: ".$this->getChiffreAffaire()." <br>";
        echo "----------------------- <br>";
    }

    public function payerImpotEtTaxe($confirmation){
        if($confirmation == true){
            echo "----------------------------------------------------------<br>";
            echo $this->getNom()." a payé l'impot et toute les taxes ✅<br>";
            echo "----------------------------------------------------------<br>";
        }else{
            echo "----------------------------------------------------------<br>";
            echo $this->getNom()." n'a pas payé l'impot et toute les taxes ❌<br>";
            echo "----------------------------------------------------------<br>";
        }
    }

}

class AminataConception extends Entreprise{
    private $nombreEmployees;

    public function __construct($nom, $chiffreAffaire, $confirmation, $nombreEmployees)
    {
        Parent::__construct($nom, $chiffreAffaire, $confirmation);
        $this->setNombreEmployees($nombreEmployees);

    }

    public function getNombreEmployees(){
        return $this->nombreEmployees;
    }
    public function setNombreEmployees($nombreEmployees){
        $this->nombreEmployees = $nombreEmployees;
    }

    public function contrat($a){

    }

    public function description(){
        echo "Entreprise: ".$this->getNom()." <br>";
        echo "Chiffre d'affaire: ".$this->getChiffreAffaire()." <br>";
        echo "Nombre de salariés: ".$this->getNombreEmployees()." <br>";
        echo "----------------------- <br>";
    }

}

class YsufConception extends Entreprise{
    public function __construct($nom, $chiffreAffaire, $confirmation)
    {
        Parent::__construct($nom, $chiffreAffaire, $confirmation);
    }

    public function contrat($a){
        
    }

}

class CyrilConception extends Entreprise{
    public function __construct($nom, $chiffreAffaire, $confirmation)
    {
        Parent::__construct($nom, $chiffreAffaire, $confirmation);
    }

    public function contrat($a){
        
    }

}

class Administration{

    public static $secret = "Le secret de l'administration";

    public function payerImpot(CyrilConception $representant){
        echo "a payé l'impot et taxes...";
    }

}

$entp1 = new AminataConception("Aminata Conception Sevran 🍀", 300000, true, 700);
$entp2 = new AminataConception("Aminata Conception Perpignan 🍀", 400000, false, 90);
$entp3 = new AminataConception("Aminata Conception Paris 🍀", 700000, true, 100);
$entp4 = new AminataConception("Aminata Conception New York 🍀", 900000, true, 500);
$entp5 = new AminataConception("Aminata Conception Japan 🍀", 600000, true, 150);


$entp1->description();
$entp2->description();
$entp3->description();
$entp4->description();


// $entp3 = new CyrilConception("Cyril Conception 🐕", 400000, true);
// $entp2 = new YsufConception("Ysuf Conception 🦜", 200000, true);
// $ad = new Administration();
// $ad->payerImpot($entp3);

$entp1->payerImpotEtTaxe($entp1->getConfirmation());
$entp2->payerImpotEtTaxe($entp2->getConfirmation());
$entp3->payerImpotEtTaxe($entp3->getConfirmation());

// $entp1->description();
// $entp2->description();
// $entp3->description();


// echo Administration::$secret;

?>