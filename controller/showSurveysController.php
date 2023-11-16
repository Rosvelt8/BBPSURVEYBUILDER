<?php
require('../../model/surveys.php');
function indexShowSurveys(){
    global $getSurveys, $surveys;
    $idInvestigator=$_SESSION['id'];
    $getSurveys= new Survey();
    $surveys= $getSurveys->getSurveysByInvestigator($idInvestigator);
    return $surveys;
}
// **************** APPEL DE L'INDEX***************************
 indexShowSurveys();