<?php
class Subscription_type{

    public function getAllSubscription(){
        global $DB; 
        $getSubscriptionsType = $DB -> query('SELECT * FROM subscriptions_type');
        
        return $getSubscriptionsType->fetchAll();
    }
}