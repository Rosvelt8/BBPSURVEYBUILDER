<?php
namespace model;
class User{

    public function login($email, $password){
        global $DB;
        $getUser = $DB->prepare('SELECT * FROM users WHERE email= ?');
        $getUser -> execute(array($email));
        $user=$getUser->fetch();
        if($getUser->rowCount()>0){
            // var_dump($user);
            if(password_verify($password, $user['password'])!== false){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function verifyIfUserEmailExist($email){
        global $DB;
        $verifyConnection = $DB -> prepare('SELECT * FROM users WHERE email= ?');
        $verifyConnection -> execute(array($email));
        if($verifyConnection->rowCount()==0){
            return false;
        }

        else{
            return true;
        }
    }

    public function getUserByEmail($email){
        global $DB;
        $getUserWhere = $DB -> prepare('SELECT * FROM users WHERE email=?');
        $getUserWhere->execute(array($email));
        return $getUserWhere->fetch();
    }
}