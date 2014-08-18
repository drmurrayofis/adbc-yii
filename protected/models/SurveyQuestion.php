<?php

/**
 * Used for a "on a scale of 1 to 10"-like question
 */
class SurveyQuestion extends CFormModel
{
    public $ordinal;
	public $answer;
	public $text;
	public $num_choices;

    public function __construct($ordinal, $text, $num_choices, $required=false)
    {
        parent::__construct($required ? 'required' : '');

        $this->ordinal = $ordinal;
        $this->text = $text;
        $this->num_choices = $num_choices;
    }


	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('answer', 'required', 'on'=>'required'),
			array('answer', 'numerical', 'min'=>1, 'max'=>$this->num_choices),
		);
	}


    public function getXml()
    {
        return "<question number=\"".$this->ordinal."\" ".
               "response=\"".$this->answer."\"></question>";
    }
}
