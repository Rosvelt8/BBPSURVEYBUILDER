<?php

class Admin{
    private $name;
    private $country;
    private $phone;
    private $email;

    public function getAdmin($id){
        global $DB;
        $getAdmin = $DB -> prepare('SELECT * FROM admin WHERE idadmin= ?');
        $getAdmin -> execute(array($id));
        return $getAdmin->fetch();
    }
    public function getAdminByEmail($id){
        global $DB;
        $getAdmin = $DB -> prepare('SELECT * FROM admin WHERE email= ? LIMIT 1');
        $getAdmin -> execute(array($id));
        return $getAdmin->fetch();
    }


    public function getAdminWhere($where){
        global $DB;
        $getAdminWhere = $DB -> prepare('SELECT * FROM admin WHERE '.$where);
        $getAdminWhere->execute();
        return $getAdminWhere->fetch();
    }


    public function getAdminsWhere($where){
        global $BD;
        $getAdminWhere = $BD -> query('SELECT * FROM admin WHERE '.$where);
        return $getAdminWhere->fetchAll();
    }


    public function getAllAdmin(){
        global $BD;
        $getAllAdmin = $BD -> prepare('SELECT * FROM admin');
        $getAllAdmin -> execute();

        return $getAllAdmin->fetchAll();
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