<?php

/**
 * Renders and evaluates quizzes for students to take.
 */
class Quiz extends Sequence
{
    private $questions = array();

    private function &getWorkingQuestion()
    {
        $qid = count($this->questions) - 1;
        return $this->questions[$qid];
    }


    public function init()
    {
        parent::init();
    }

    public function run()
    {    
        $this->encode();
        parent::run();
    }

    public function encode()
    {
        $out = "";

        for ($i = 0; $i < count($this->questions); ++$i)
        {
            $q  = $this->questions[$i];
            $qh = $this->getQuestionHtml($q);
            $ah = $this->getListHtml($q['answers'], 'getAnswerHtml', 'quiz-answers');
            $qa = CHtml::tag('div', array('class'=>'quiz-qa'), $qh.$ah);

            $fh = $this->getListHtml($q['feedback'], 'getFeedbackHtml', 'quiz-responses');

            $this->addContent(CHtml::tag('div', array('class'=>'quiz-ui'), $qa.$fh));
        }
    }


    private function getQuestionHtml($q)
    {
        $t = $q['text'];
        $c = $q['correct'];

        return CHtml::tag('div', array('class'=>'quiz-question', 'data-correct'=>$c), $t);
    }





    private function getListHtml($arr, $method, $class)
    {
        $out = "";

        foreach ($arr as $v)
        {
            $out .= CHtml::tag('li', array(), $this->$method($v));
        }

        return CHtml::tag('ul', array('class'=>$class), $out);
    }



    private function getAnswerHtml($a)
    {
        return CHtml::tag('div', array('class'=>'quiz-answer'), $a);
    }



    private function getFeedbackHtml($f)
    {
        return CHtml::tag('div', array('class'=>'hidden quiz-feedback'), $f);
    }


    public function question($html, $correct_id)
    {
        $ordinal = count($this->questions);

        $this->questions[] = array(
            'correct'  => $correct_id,
            'text'     => $html,
            'ordinal'  => $ordinal,
            'answers'  => array(),
            'feedback' => array(),
        );
    }





    public function answer($html)
    {
        $q = &$this->getWorkingQuestion();
        $q['answers'][] = $html;
    }





    public function feedback($html)
    {
        $q = &$this->getWorkingQuestion();
        $q['feedback'][] = $html;
    }
}
