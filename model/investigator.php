<?php

class Investigator{
    private $name;
    private $country;
    private $phone;
    private $email;

    public function getInvestigator($id){
        global $DB;
        $getInvestigator = $DB -> prepare('SELECT * FROM investigators WHERE idinvestigator= ?');
        $getInvestigator -> execute(array($id));
        return $getInvestigator->fetch();
    }


    public function getInvestigatorByEmail($email){
        global $DB;
        $getInvestigatorWhere = $DB -> prepare('SELECT * FROM investigators WHERE email=? ');
        $getInvestigatorWhere->execute(array($email));
        return $getInvestigatorWhere->fetch();
    }


    public function getInvestigatorsWhere($where){
        global $BD;
        $getInvestigatorWhere = $BD -> query('SELECT * FROM investigators WHERE '.$where);
        return $getInvestigatorWhere->fetchAll();
    }


    public function getAllinvestigator(){
        global $BD;
        $getAllinvestigator = $BD -> prepare('SELECT * FROM investigators');
        $getAllinvestigator -> execute();

        return $getAllinvestigator->fetchAll();
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setName($name)
    {
        $this->name = $name;    
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


}