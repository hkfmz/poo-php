<?php
//public, private, protected (Private + héritage)
class Animal{
    protected $nom;
    protected $famille;

    public function __construct($nom, $famille){
        $this->nom = $nom;
        $this->famille = $famille;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function hurler(){
        echo "$this->nom hurle : Huuuuuhh ! <br>";
    }
}

class Loup extends Animal{
    public function __construct($nom, $famille){
        Parent::__construct($nom, $famille);
    }

    public function hurler(){
        echo "$this->nom hurle : Woooooooo ! <br>";
    }
}

class Coq extends Animal{
    public function __construct($nom, $famille){
        Parent::__construct($nom, $famille);
    }

    public function hurler(){
        echo "$this->nom hurle : Cocoricooo! <br>";
    }
}

class Chat extends Animal{
    public function __construct($nom, $famille){
        Parent::__construct($nom, $famille);
    }

    public function hurler(){
        echo "$this->nom hurle : Miaouuw ! <br>";
    }
}

$a1 = new Loup("Loup", "Canidés");
$a2 = new Coq("Coq", "Phasianidae");
$a3 = new Chat("Chat", "Félins");

$a1->setNom("Loup 🦊");
$a2->setNom("Coq 🐔");
$a3->setNom("Chat 🐱");

$a1->hurler();
$a2->hurler();
$a3->hurler();






?>