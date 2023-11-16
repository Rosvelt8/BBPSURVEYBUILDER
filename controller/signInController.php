<?php
namespace controller;

use Admin;
use Investigator;
use model\User;
use Subscription_type;

require('../../model/database_connexion.php');
require('../../model/subscription_type.php');
require('../../model/investigator.php');
require('../../model/admin.php');
require('../../model/user.php');


function index(){
    global $getTypesSubscription, $typesSubscription;

    $getTypesSubscription= new Subscription_type();
    $typesSubscription= $getTypesSubscription->getAllSubscription();
    return $typesSubscription;
}
// **************** APPEL DE L'INDEX***************************
 index();
//  ***********************************************************
function store(){
    global $insertNewEnqueteur, $DB;
    $nom= $_POST['nom'];
    $pays= $_POST['pays'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $abonnement=$_POST['subscription'];
    $user=new User();

    if(!$user->verifyIfUserEmailExist($email)){

        $insertNewEnqueteur= $DB->prepare("INSERT INTO `investigators` (`idinvestigator`, `name`, `country`, `phone`, `email`) VALUES (NULL, ?, ?, ?, ?)
        ");
        $insertNewEnqueteur->execute(array($nom,$pays,$phone,$email));
        

        $insertNewUser= $DB->prepare("INSERT INTO `users` (`iduser`, `email`, `password`) VALUES (NULL, ?, ?)
        ");
        $password= password_hash("user", PASSWORD_BCRYPT);
        $insertNewUser->execute(array($email,$password));
        header('location: dashboard.page.php');

    }


}

if(isset($_POST['inscription'])){
    store();
}

function login(){
    global $errorMessage;
    global $test;
    $login= $_POST['emailLog'];
    $password= $_POST['password'];
    $investigator= new Investigator();
    $admin= new Admin();
    $user= new User();
    // var_dump($user);
    if($user->login($login, $password)){
        $userInformation= $user->getUserByEmail($login);

        session_start();
        $test=$userInformation['status'];
        // var_dump($test);
        if($userInformation['status']=='I'){
            $investigatorInformation= $investigator->getInvestigatorByEmail($login);
            $_SESSION['auth']= true;
            $_SESSION['name']= $investigatorInformation['name'];
            $_SESSION['id']= $investigatorInformation['idinvestigator'];
            $_SESSION['phone']= $investigatorInformation['phone'];
            $_SESSION['email']= $investigatorInformation['email'];
            $_SESSION['status']= $userInformation['status'];
            $_SESSION['mode']= 'L';
            header('location: dashboard.page.php');
            

        }
        else if($userInformation['status']=='A'){
            $adminInformation= $admin->getAdminByEmail($login);
            $_SESSION['auth']= true;
            $_SESSION['name']= $adminInformation['name'];
            $_SESSION['id']= $adminInformation['idadmin'];
            $_SESSION['phone']= $adminInformation['phone'];
            $_SESSION['email']= $adminInformation['email'];
            $_SESSION['status']= $userInformation['status'];
            $_SESSION['mode']= 'L';
            header('location: dash.page.php');
        }
        else{
            $errorMessage="pas de status";
        }
    }
    else{
        $errorMessage="identifiant incorrects";
    }


}

if(isset($_POST['login'])){
    login();
}

