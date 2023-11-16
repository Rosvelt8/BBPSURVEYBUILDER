<?php
require('../../model/surveys.php');
require('../../model/questions.php');
require('../../model/session.php');
require('../../model/answers.php');
require('../../model/answered.php');
function indexShowSurveys(){
    global $getSurveys, $survey, $surveysNumber,$question, $visitors, $answers;
    $idInvestigator=$_SESSION['id'];
    $idSurvey= $_GET['id'];
    $idQuestion= $_GET['q'];
    $getSurvey= new Survey();
    $survey= $getSurvey->getSurvey($idSurvey);
    $session= new Session();
    $getQuestions=new Question();
    $question= $getQuestions->getQuestion($idQuestion);
    $visitors= $session->countSessionBySurvey($idSurvey);
    $getAnswer= new Answer();
    $answers= $getAnswer->getAnswersByQuestion($idQuestion);
    
}
// **************** APPEL DE L'INDEX***************************
 indexShowSurveys();

 function getCountAnswers($idQuestion){
    $getAnswer= new Answer();
    $answers= $getAnswer->countAnswer($idQuestion);
    return $answers['answer'];
 }
 function getCountAnswered($idAnswer){
    $getAnswered= new Answered();
    $answered= $getAnswered->countAnsweredByAnswer($idAnswer);
    return $answered['ans'];
 }