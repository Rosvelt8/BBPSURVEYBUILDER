<?php
require('../../model/surveys.php');
function indexDash(){
    global $getSurveys, $surveysNumber, $getSubscriptions;
    $idInvestigator=$_SESSION['id'];
    $getSurveys= new Survey();
    $subscription= new Subscription();
    $getSubscriptions= $subscription->getSubscriptionsByInvestigators();
    $surveysNumber=$getSurveys->getSurveysNumber($idInvestigator);
    $surveys= $getSurveys->getSurveysByInvestigatorLimited($idInvestigator);
    return $surveys;

}
// **************** APPEL DE L'INDEX***************************
 indexDash();