<?php 

require('../../model/database_connexion.php');
require('../../model/surveys.php');
require('../../model/answers.php');
require('../../model/questions.php');
require('../../model/answered.php');
require('../../model/session.php');

  function getIp(){
    $mac= exec('getmac');
    $mac=strtok($mac, ' ');
    return $mac;
  }

  



function index(){
    
    global $getSurvey, $survey, $getQuestions;
    $session=new Session();
    $token= $_GET['token'];
    $getSurvey= new Survey();
    $survey= $getSurvey->getSurveyByToken($token);
    if(isset($_COOKIE['token']) && $_COOKIE['token'] == $token){
        header('location: 404.page.php');
    }
    $getQuestions=new Question();
}
index();

function ans(){
    global $DB, $questions,$getQuestions;
    $getSurvey= new Survey();
    $token= $_GET['token'];
    $survey= $getSurvey->getSurveyByToken($token);
    $getQuestions=new Question();
    $questions= $getQuestions->getQuestionsBySurvey($survey['idsurvey']);
    foreach($questions as $question){
        $questionAns= $_POST['ans'.$question['idquestion']];
        $idquestionAns= $_POST['idAns'.$question['idquestion']];   
        $InsertSurvey= $DB->prepare("INSERT INTO `answered` (`idanswered`, `answer`, `idanswer`) VALUES (NULL, ?, ?)");
        $InsertSurvey->execute(array("Y",$questionAns));
    }
    $createSession= $DB->prepare("INSERT INTO `session` (`idsession`, `ipadress`, `idsurvey`) VALUES (NULL, ?, ?)");
    $createSession->execute(array(getIp(), $survey['idsurvey']));
    setcookie('token', $token, time()+ (86400 *365), "/");
    header('location: Thanks.page.php');
}

if(isset($_POST['addAnswered'])){
    ans();
}