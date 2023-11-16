<?php
require('../../model/surveys.php');
require('../../model/questions.php');
function indexShowSurvey(){
    global $getSurvey, $survey, $questions;
    $idSurvey= $_GET['id'];
    $getSurvey= new Survey();
    $survey= $getSurvey->getSurvey($idSurvey);
    $getQuestions=new Question();
    
    $questions= $getQuestions->getQuestionsBySurvey($idSurvey);
    
}
// **************** APPEL DE L'INDEX***************************
 indexShowSurvey();

 function update(){
    global $InsertSurvey,$errorMessage, $DB;
    $title= $_POST['title'];
    $idSurvey= $_POST['idSurvey'];
    $description= $_POST['description'];
    $idInvestigator= $_SESSION['id'];
    $lastImg= $_POST['img_path'];
    $token=$_POST['tokenSurvey'];
    $photo= $token.$_FILES['imgSurvey']['name'];
    $target= '../assets/img/survey/'. basename($token.$_FILES['imgSurvey']['name']);
    unlink('../assets/img/survey/'.$lastImg);
    
    if (move_uploaded_file($_FILES['imgSurvey']['tmp_name'], $target)) {
        $InsertSurvey= $DB->prepare("UPDATE survey SET img_path = ?,title = ?, description = ? WHERE idsurvey = ?");
        if($InsertSurvey->execute(array($photo, $title, $description,$idSurvey))){
            header('location: survey.page.php?id='.$idSurvey);            
        }else{
            $errorMessage = "Une erreure inattendue est survenue lors de la modification";
        }
    
    } else {
        $errorMessage = "impossible de charger l'image veuillez en choisir une autre";
        
    }


}

if(isset($_POST['updateSurvey'])){
    update();
}

function store(){
    global $DB;
    $intittle= $_POST['intitle'];
    $idSurvey= $_GET['id'];
    
    $insertNewQuestion= $DB->prepare("INSERT INTO `questions`(`idquestion`, `intitle`, `idsurvey`) VALUES (NULL, ?, ?)
    ");
    if($insertNewQuestion->execute(array($intittle,$idSurvey))){
        header('location: survey.page.php?id='.$idSurvey); 
    }

}

if(isset($_POST['addQuestion'])){
    store();
}