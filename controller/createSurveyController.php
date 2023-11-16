<?php
require('../../model/surveys.php');
function store(){
    global $insertNewEnqueteur, $DB;
    $title= $_POST['title'];
    $description= $_POST['description'];
    $idInvestigator= $_SESSION['id'];
    $token=uniqid();
    $photo= $token.$_FILES['imgSurvey']['name'];
    $target= '../assets/img/survey/'. basename($token.$_FILES['imgSurvey']['name']);

    if (move_uploaded_file($_FILES['imgSurvey']['tmp_name'], $target)) {
        $InsertSurvey= $DB->prepare("INSERT INTO `survey` (`idsurvey`, `img_path`, `title`, `description`, `token`, `idinvestigator`) VALUES (NULL, ?, ?, ?, ?, ?)");
        if($InsertSurvey->execute(array($photo, $title, $description, $token, $idInvestigator))){
            header('location: survey_list.page.php');            
        }else{
            $errorMessage= $InsertSurvey->errorInfo();
        }
    
    } else {
        $errorMessage = "impossible de charger l'image veuillez en choisir une autre";
        
    }


}

if(isset($_POST['addSurvey'])){
    store();
}

