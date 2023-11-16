<?php

class Subscription{
    private $amount;
    private $type;
    private $status;
    private $endDate;
    private $beginDate;
    

    public function verifySubscription($idInvestigator){
        global $DB;
        $getSubscription = $DB -> prepare('SELECT * FROM subscriptions WHERE idinvestigator= ?');
        $getSubscription -> execute(array($idInvestigator));
        if ($getSubscription->rowCount() > 0) {
           $subscription=$getSubscription->fetchColumn();
           if($subscription['enddate']>= date('Y/m/d')){
            return true;
           }else{
            return false;
           }
        }else{
            return false;
        }
    }

    public function getAllSubscription(){
        global $DB; 
        $getSubscriptions = $DB -> prepare('SELECT * FROM subscriptions');
        $getSubscriptions -> execute();
        return $getSubscriptions->fetchAll();
    }

    public function getSubscription($id){
        global $DB; 
        $getSubscriptions = $DB -> prepare('SELECT * FROM subscriptions WHERE idsubscription=?');
        $getSubscriptions -> execute(array($id));
        return $getSubscriptions->fetchColumn();
    }
    public function getSubscriptionByInvestigator($idInvestigator){
        global $DB; 
        $getSubscriptions = $DB -> prepare('SELECT subscription.*, subscriptions_type.label AS label, investigators.name AS name
                                                FROM subscription, subscriptions_type, investigators 
                                                WHERE subscription.idtypesubscription= subscriptions_type.idsubscriptiontype
                                                AND subscription.idinvestigator= investigators.idinvestigator
                                                AND investigators.idinvestigator= ? LIMIT 1');
        $getSubscriptions -> execute(array($idInvestigator));
        return $getSubscriptions->fetch();
    }
    public function getSubscriptionsByInvestigators(){
        global $DB; 
        $getSubscriptions = $DB -> prepare('SELECT subscription.*, subscriptions_type.label AS label, investigators.name AS nameI
                                                FROM subscription, subscriptions_type, investigators 
                                                WHERE subscription.idtypesubscription= subscriptions_type.idsubscriptiontype
                                                AND subscription.idinvestigator= investigators.idinvestigator');
        $getSubscriptions -> execute();
        return $getSubscriptions->fetchAll();
    }

    public function getSubscriptionWhere($where){
        global $DB; 
        $getSubscriptions = $DB -> query('SELECT * FROM subscriptions WHERE '.$where.' ');
        return $getSubscriptions->fetchColumn();
    }

    public function getAllSubscriptionsWhere($where){
        global $DB; 
        $getSubscriptions = $DB -> query('SELECT * FROM subscriptions WHERE '.$where.' ');
        return $getSubscriptions->fetchAll();
    }
}