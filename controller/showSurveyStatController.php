<?php
require('../../model/surveys.php');
require('../../model/questions.php');
require('../../model/Session.php');
require('../../model/answers.php');
function indexShowSurveys(){
    global $getSurveys, $survey, $surveysNumber,$questions, $visitors;
    $idInvestigator=$_SESSION['id'];
    $idSurvey= $_GET['id'];
    $getSurvey= new Survey();
    $survey= $getSurvey->getSurvey($idSurvey);
    $session= new Session();
    $getQuestions=new Question();
    $questions= $getQuestions->getQuestionsBySurvey($idSurvey);
    $visitors= $session->countSessionBySurvey($idSurvey);
    $surveysNumber=$getSurvey->getSurveysNumber($idInvestigator);
    
}
// **************** APPEL DE L'INDEX***************************
 indexShowSurveys();

 function getCountQuestion($idSurvey){
    $getQuestions= new Question();
    $questions= $getQuestions->countQuestion($idSurvey);
    return $questions['question'];
 }
 function getCountAnswers($idQuestion){
    $getAnswer= new Answer();
    $answers= $getAnswer->countAnswer($idQuestion);
    return $answers['answer'];
 }