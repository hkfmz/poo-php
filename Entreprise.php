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

    abstract public function contrat($signature);

    public function setConfirmation($confirmation){
        if(is_bool($confirmation)){
            $this->confirmation = $confirmation;
        }else{
            throw new Exception("🟠 La confirmation doit être un booleen !");
        }
    }

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
    public function __construct($nom, $chiffreAffaire, $confirmation)
    {
        Parent::__construct($nom, $chiffreAffaire, $confirmation);
    }

    public function contrat($a){

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

$entp1 = new AminataConception("Aminata Conception 🍀", 500000, false);
$entp2 = new YsufConception("Ysuf Conception 🦜", 200000, true);
$entp3 = new CyrilConception("Cyril Conception 🐕", 400000, true);

$entp1->payerImpotEtTaxe($entp1->getConfirmation());
$entp2->payerImpotEtTaxe($entp2->getConfirmation());
$entp3->payerImpotEtTaxe($entp3->getConfirmation());


?>