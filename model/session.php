<?php

class Session{

    private $answer;


    public function verifSession($ipAdress, $idSurvey){
        global $DB;
        $verifSession = $DB -> prepare('SELECT * FROM `session` WHERE ipadress=?, idsurvey=?');
        $verifSession -> execute(array($ipAdress, $idSurvey));
        if($verifSession->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public function countSessionByInvestigators($idInvestigator){
        global $DB;
        $countSession= $DB->prepare('SELECT COUNT(session.idsession) AS visitors
                                    FROM investigators, survey, session
                                    WHERE investigators.idinvestigator= survey.idinvestigator
                                    AND session.idsurvey= survey.idsurvey 
                                    AND investigators.idinvestigator =?');
        $countSession->execute(array($idInvestigator));
        return $countSession->fetch();
    }

    public function countSessionBySurvey($idSurvey){
        global $DB;
        $countSession= $DB->prepare('SELECT COUNT(session.idsession) AS visitors
                                    FROM survey, session
                                    WHERE session.idsurvey= survey.idsurvey 
                                    AND survey.idsurvey =?');
        $countSession->execute(array($idSurvey));
        return $countSession->fetch();
    }


    public function getAnswer()
    {
        return $this->answer;
    }
    public function setAnswer($answer)
    {
        $this->answer = $answer;    
    }
}