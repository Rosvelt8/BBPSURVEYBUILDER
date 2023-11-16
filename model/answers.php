<?php

class Answer{




    public function getAnswer($id){
        global $DB;
        $getAnswer = $DB -> prepare('SELECT * FROM answers WHERE idanswer= ?');
        $getAnswer -> execute(array($id));
        return $getAnswer->fetch();
    }
    public function countAnswer($idQuestion){
        global $DB;
        $getAnswer = $DB -> prepare('SELECT COUNT(idanswer) AS answer
                                            FROM answers, questions
                                            WHERE questions.idquestion= answers.idquestion
                                            AND questions.idquestion= ?');
        $getAnswer -> execute(array($idQuestion));
        return $getAnswer->fetch();
    }
    public function getAnswersByQuestion($idSurvey){
        global $DB;
        $getAnswer = $DB -> prepare('SELECT * FROM answers WHERE idquestion= ?');
        $getAnswer -> execute(array($idSurvey));
        return $getAnswer->fetchAll();
    }

    public function getAnswers(){
        global $DB;
        $getAnswers = $DB -> prepare('SELECT * FROM answers');
        $getAnswers -> execute();
        return $getAnswers->fetchAll();
    }


    
}