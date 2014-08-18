<?php

/**
 * Used to collect feedback from the user, who can either be a student or instructor.
 */
class EvaluationForm extends CFormModel
{
	public $age;
	public $gender;
	public $major;
	public $year;
	public $course;
	public $frequency;
	public $hours_per_week;
	public $experience;
	public $reasons;
	public $comment = "";
    public $survey_questions;

    /**
     * Creates survey question objects from an array of 
     * strings representing questions. The scenario
     * distinguishes between surveys meant for students
     * and instructors.
     *
     * @param array $text_questions Array of human readable questions
     * @param string $scenario Must be "student" or "instructor"
     */
    public function __construct($text_questions, $scenario)
    {
        if ($scenario !== "student" && $scenario !== "instructor")
        {
            throw new Exception("EvaluationForm scenario must be 'student'".
                                "or 'instructor', but '$scenario' was given.");
        }

        parent::__construct($scenario);

        $i = 1;
        foreach ($text_questions as $question)
        {
            $survey_question = new SurveyQuestion($i, $question, 6);
            $this->survey_questions[] = $survey_question;
            ++$i;
        }
    }



	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
            array('age, gender, major, frequency, '.
                  'hours_per_week, course, year, '.
                  'reasons', 'required', 'on'=>'student'),
			array('gender, course, experience', 'required', 'on'=>'instructor'),
			array('survey_questions', 'checkSurvey'),
            array('comment', 'length'),
		);
	}



    /**
     * Returns data on possible answers for particular attributes.
     *
     * @return array Answer configuration
     */
    public function choices()
    {
        return array(
            'gender'=>array('radio', 'Female', 'Male'),
            'year'=>array('radio', 'Freshman', 'Sophomore', 'Junior', 'Senior', 'Graduate'), 
            'frequency'=>array(
                'radio',
                'Never',
                'Only when specifically requested by the instructor',
                'When specifically requested by the instructor and rarely on my own',
                'When specifically requested by the instructor and sometimes on my own',
                'When specifically requested by the instructor and often on my own',
            ),
            'hours_per_week'=>array(
                'radio',
                'Less than 1 hours',
                '1-5 hours',
                '6-10 hours',
                '11-15 hours',
                'More than 15 hours',
            ),
            'year'=>array('radio', 'Freshman', 'Sophomore', 'Junior', 'Senior', 'Graduate'), 
            'reasons'=>array(
                'checkbox',
                'To learn a new topic',
                'To reinforce old topics',
                'To reference during homework',
                'To review for exams',
            ),
        );
    }



	/**
	 * Declares attribute labels.
     *
     * @return array
	 */
	public function attributeLabels()
	{
		return array(
            'frequency'=>'How often do you use ADBC courseware while enrolled in the data management course?',
            'hours_per_week'=>'Please estimate the number of hours you have spent using the ADBC courseware per week.',
            'reasons'=>'Please select the resons that you use the ADBC courseware. Choose all that apply.',
            'course'=>'In which course are you using ADBC?',
            'comment'=>'Do you have any other comments?',
		);
	}



    /**
     * Validation method that checks to see if any required
     * survey questions went without answers.
     *
     * @param string $attribute
     * @param array $params
     */
    public function checkSurvey($attribute, $params)
    {
        $unanswered = array();

        for ($i = 0; $i < count($this->survey_questions); ++$i)
        {
            $question = $this->survey_questions[$i];

            if (!$question->validate())
            {
                $unanswered[] = $i + 1;
            }

        }

        if (!empty($unanswered))
        {
            // No message rendered, but error state is checked with hasErrors() in view.
            $question->addError('answer', ''); 

            $this->addError($attribute, 'Please answer question(s) '.implode(', ', $unanswered));
        }
    }



    /**
     * Just some syntactic sugar that returns an XML tag based on an attribute.
     *
     * @param string $name
     * @return string
     */
    public function quickTag($name)
    {
        return "\t<$name>".$this->$name."</$name>\n";
    }



    /**
     * Returns the XML representation of the form submission.
     *
     * @return string
     */
    public function getXml()
    {
        // CHANGE PREFIX TO http://adbc.kennesaw.edu/files WHEN POSSIBLE
        $noNsUrl = "http://adbc.kennesaw.edu/feedback/{$this->scenario}.xsd";
        $xml = "<survey xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'".
            " xsi:noNamespaceSchemaLocation='$noNsUrl'>\n";


        $xml .= $this->quickTag('comment');
        $xml .= $this->quickTag('gender');
        $xml .= $this->quickTag('course');

        if ($this->scenario === "student")
        {
            $xml .= $this->quickTag('major');
            $xml .= $this->quickTag('age');
            $xml .= $this->quickTag('year');
        }
        else
        {
            $xml .= $this->quickTag('experience');
        }

        foreach ($this->survey_questions as $question)
        {
            $xml .= "\t".$question->getXml()."\n";
        }

        $xml .= "</survey>";

        return $xml;
    }


    /**
     * Returns file name used to save XML data in a file.
     *
     * @return string
     */
    public function generateFileName()
    {
        return "/var/adbc_feedback/".$this->scenario.time().".xml";
    }
}
