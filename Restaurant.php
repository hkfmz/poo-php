<?php
class person{
    protected $Type;
    public function __construct($Type){
        $this->setType($Type);
    }
    public function getType(){
        return $this->Type;
    }
    public function setType($Type){
        $this->Type = $Type;
    }
}


class Employee extends person{
    protected $EmpNumber;
    protected $position;

    public function __construct($Type, $EmpNumber, $position){
        Parent::__construct($Type);
        $this->setEmpNumber($EmpNumber);
        $this->setPosition($position);
    }
    public function getEmpNumber(){
        return $this->EmpNumber;
    }
    public function setEmpNumber($EmpNumber){
        $this->EmpNumber = $EmpNumber;
    }

    public function getPosition(){
        return $this->position;
    }
    public function setPosition($position){
        $this->position = $position;
    }
}

class Customer extends person{
    protected $custNumber;
}


?>