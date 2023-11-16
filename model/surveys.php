<?php

class Survey{

    


    public function getSurvey($id){
        global $DB;
        $getSurvey = $DB -> prepare('SELECT * FROM survey WHERE idsurvey= ?');
        $getSurvey -> execute(array($id));
        return $getSurvey->fetch();
    }

    public function getSurveys(){
        global $DB;
        $getSurvey = $DB -> prepare('SELECT * FROM survey');
        $getSurvey -> execute();
        return $getSurvey->fetchAll();
    }
    public function getSurveysByInvestigator($idInvestigator){
        global $DB;
        $getSurvey = $DB -> prepare('SELECT * FROM survey WHERE idinvestigator=?');
        $getSurvey -> execute(array($idInvestigator));
        return $getSurvey->fetchAll();
    }
    public function getSurveysByInvestigatorWithInfos($idInvestigator){
        global $DB;
        $getSurvey = $DB -> prepare('SELECT *, COUNT(questions.idquestion) AS question 
                                            FROM survey, questions 
                                            WHERE survey.idsurvey= questions.idsurvey
                                            AND  survey.idinvestigator=?');
        $getSurvey -> execute(array($idInvestigator));
        return $getSurvey->fetchAll();
    }
    public function getSurveyByToken($token){
        global $DB;
        $getSurvey = $DB -> prepare('SELECT * FROM survey WHERE token=?');
        $getSurvey -> execute(array($token));
        return $getSurvey->fetch();
    }
    public function getSurveysByInvestigatorLimited($idInvestigator){
        global $DB;
        $getSurvey = $DB -> prepare('SELECT * FROM survey WHERE idinvestigator=? LIMIT 5');
        $getSurvey -> execute(array($idInvestigator));
        return $getSurvey->fetchAll();
    }
    public function getSurveysNumber($idInvestigator){
        global $DB;
        $getSurvey = $DB -> prepare('SELECT COUNT(idsurvey) AS numberSurvey FROM survey WHERE idinvestigator=?');
        $getSurvey -> execute(array($idInvestigator));
        return $getSurvey->fetch();
    }


    
}