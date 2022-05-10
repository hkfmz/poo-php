<?php
// Créditation du compte à partir de >=1000 € 
class BankAccount{
    private $numberDeCompte= 0;
    private $solde = 0;

    public function __construct($numberDeCompte){
        $this->numberDeCompte = $numberDeCompte;
    }

    public function setNumberDeCompte($a){
        if($a == "A660FF90779")
        {
            throw new Exception("Votre compte est bloqué pendant 48h.");
        }else{
            $this->numberDeCompte = $a;
        }
    }

    public function setSolde($solde){
        if($solde < 1000){
            throw new Exception("Le solde du compte doit être >1000");
        }else{
            $this->solde = $solde;
        }
    }

    public function getSolde(){
        if($this->numberDeCompte == "A660FF90779")
        {
            return "Votre compte est bloqué pendant 48h.";
        }else{
            return $this->solde;
        }
        
    }
}

$c1 = new BankAccount("A320FFY0909");
$c2 = new BankAccount("A660FF90779");
$c1->setSolde(1000);
$c2->setSolde(1800);

// 

$c2->setNumberDeCompte("A660FF90788");
echo $c2->getSolde()." <br>";

// echo $c2->getSolde()." <br>";
// print_r ($c1);

?>