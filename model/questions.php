<?php

class Question{




    public function getQuestion($id){
        global $DB;
        $getAnswered = $DB -> prepare('SELECT * FROM questions WHERE idquestion= ?');
        $getAnswered -> execute(array($id));
        return $getAnswered->fetch();
    }

    public function getQuestionsBySurvey($idSurvey){
        global $DB;
        $getAnswered = $DB -> prepare('SELECT * FROM questions WHERE idsurvey= ?');
        $getAnswered -> execute(array($idSurvey));
        return $getAnswered->fetchAll();
    }

    public function getQuestions(){
        global $DB;
        $getAnswered = $DB -> prepare('SELECT * FROM questions');
        $getAnswered -> execute();
        return $getAnswered->fetchAll();
    }
    public function countQuestion($idSurvey){
        global $DB;
        $getAnswered = $DB -> prepare('SELECT COUNT(idquestion) AS question
                                            FROM questions, survey
                                            WHERE questions.idsurvey= survey.idsurvey
                                            AND survey.idsurvey= ?');
        $getAnswered -> execute(array($idSurvey));
        return $getAnswered->fetch();
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