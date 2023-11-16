<?php

class Answered{

    private $answer;


    public function getAnswereds($id){
        global $BD;
        $getAnswered = $BD -> prepare('SELECT * FROM answered WHERE idanswer= ?');
        $getAnswered -> execute(array($id));
        return $getAnswered->fetchAll();
    }

    public function getAnsweredByQuestion($idQuestion){
        global $DB;
        $getAnswered = $DB -> prepare('SELECT * 
                                        FROM answered, question, answers
                                        WHERE answers.idanswer=answered.idanswer
                                        AND questions.idquestion= answers.idquestion
                                        AND questions.idquestion= ?');
        $getAnswered -> execute(array($idQuestion));
        return $getAnswered->fetchAll();
    }
    public function countAnsweredByAnswer($idAnswer){
        global $DB;
        $getAnswered = $DB -> prepare('SELECT COUNT(answered.idanswered) AS ans
                                        FROM answered, answers
                                        WHERE answers.idanswer=answered.idanswer
                                        AND answers.idanswer= ?');
        $getAnswered -> execute(array($idAnswer));
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