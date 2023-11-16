<?php
require('../../model/answers.php');
require('../../model/questions.php');
function indexShowSurvey(){
    global $getQuestion, $answers, $question;
    $idQuestion= $_GET['id'];
    $getQuestion= new Question();
    $question= $getQuestion->getQuestion($idQuestion);
    $getAnswers=new Answer();
    $answers= $getAnswers->getAnswersByQuestion($idQuestion);
    
}
// **************** APPEL DE L'INDEX***************************
 indexShowSurvey();

 function update(){
    global $DB;
    $intitle= $_POST['intitleQ'];
    $idQuestion= $_GET['id'];

    $InsertQuestion= $DB->prepare("UPDATE questions SET intitle = ? WHERE idquestion = ?");
    if($InsertQuestion->execute(array($intitle, $idQuestion))){
        header('location: question.page.php?id='.$idQuestion);
    }else{
        $errorMessage = "Une erreure inattendue est survenue lors de la modification";
    }
    
    


}

if(isset($_POST['updateQuestion'])){
    update();
}

function store(){
    global $DB;
    $intittle= $_POST['intitle'];
    $idQuestion= $_GET['id'];
    
    $insertNewAnswer= $DB->prepare("INSERT INTO `answers`(`idanswer`, `intitle`, `idquestion`) VALUES (NULL, ?, ?)
    ");
    if($insertNewAnswer->execute(array($intittle,$idQuestion))){
        header('location: question.page.php?id='.$idQuestion); 
    }

}

if(isset($_POST['addAnswer'])){
    store();
}