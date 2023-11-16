<?php

use model\User;

require('../../model/database_connexion.php');
require('../../model/subscription_type.php');
require('../../model/subscription.php');
require('../../model/investigator.php');
require('../../model/admin.php');
require('../../model/user.php');


session_start();

function index(){
    global $getInformation, $getSubscription;
    if($_SESSION['status']=="I"){
        $investigator= new Investigator();
        $user= new User();
        $getUser= $user->getUserByEmail($_SESSION['email']);
        $getInformation=$investigator->getInvestigator($_SESSION['id']);
        $getInformation+=(array)$getUser;
        $subscription= new Subscription();
        $getSubscription= $subscription->getSubscriptionByInvestigator($getInformation['idinvestigator']);
    }
    if($_SESSION['status']=="A"){
        $admin= new Admin();
        $user= new User();
        $getUser= $user->getUserByEmail($_SESSION['email']);
        $getInformation=$admin->getAdmin($_SESSION['id']);
        $getInformation+=(array)$getUser;
    }

    
    
    if(!$_SESSION['auth']){
        header('location:../../controller/logOutController.php');
    }
    
}

index();
