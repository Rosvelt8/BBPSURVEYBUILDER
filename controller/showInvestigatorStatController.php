<?php
require('../../model/surveys.php');
require('../../model/questions.php');
require('../../model/Session.php');
function indexShowSurveys(){
    global $getSurveys, $surveys, $surveysNumber, $visitors;
    $idInvestigator=$_SESSION['id'];
    $getSurveys= new Survey();
    $session= new Session();
    $visitors= $session->countSessionByInvestigators($idInvestigator);
    $surveysNumber=$getSurveys->getSurveysNumber($idInvestigator);
    $surveys= $getSurveys->getSurveysByInvestigator($idInvestigator);
    return $surveys;
}
// **************** APPEL DE L'INDEX***************************
 indexShowSurveys();

 function getCountQuestion($idSurvey){
    $getQuestions= new Question();
    $questions= $getQuestions->countQuestion($idSurvey);
    return $questions['question'];
 }