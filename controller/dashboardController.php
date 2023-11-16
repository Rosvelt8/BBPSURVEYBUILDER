<?php
require('../../model/surveys.php');
function indexShowSurveys(){
    global $getSurveys, $surveysNumber, $surveys;
    $idInvestigator=$_SESSION['id'];
    $getSurveys= new Survey();
    $surveysNumber=$getSurveys->getSurveysNumber($idInvestigator);
    $surveys= $getSurveys->getSurveysByInvestigatorLimited($idInvestigator);
    return $surveys;

}
// **************** APPEL DE L'INDEX***************************
 indexShowSurveys();