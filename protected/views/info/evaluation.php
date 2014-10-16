<?php
/**
 * @var $this InfoController
 * @var $model EvaluationModel
 */

function printField($form, $model, $attribute, $type, $choices = null, $htmloptions = array())
{
    $html = $form->labelEx($model, $attribute);

    switch ($type)
    {
    case "text":
        $html .= $form->textField($model, $attribute, $htmloptions);
        break;

    case "radio":
        $html .= $form->radioButtonList($model, $attribute, $choices, $htmloptions); 
        break;

    case "checkbox":
        $html .= $form->checkBoxList($model, $attribute, $choices, $htmloptions); 
        break;

    case "textarea":
        $html .= $form->textArea($model, $attribute, $choices, $htmloptions); 
        break;
    }


    return CHtml::tag('div', array('class'=>'form-row'), $html);
}

?>
<h1><?php echo ucfirst($model->scenario) . " Evaluation"; ?></h1>

<?php
$form = $this->beginFormRender($model);

// Print questions before survey table.
$attrs  = $model->attributeNames();
$config = $model->choices();

for ($i = 0; $i < count($attrs); ++$i)
{
    $attr = $attrs[$i];

    if ($model->isAttributeRequired($attr))
    {
        $field_type = "text";
        $choices = array();

        if (isset($config[$attr]))
        {
            $field_type = isset($config[$attr][0]) ? $config[$attr][0] : "text";
            $choices    = array_slice($config[$attr], 1);
        }
        
        echo printField($form, $model, $attr, $field_type, $choices);
    }
}
?>





<h2>Survey Questions</h2>
<p>Please answer the following questions on a scale of 1 to 5, where 1 is "Strongly Disagree,"
and 5 is "Strongly Agree." Choose N for "not applicable."</p>

<table class="survey-table">
    <thead>
        <tr>
            <th>Question</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>N</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            for ($i = 0; $i < count($model->survey_questions); ++$i)
            {
                $question = $model->survey_questions[$i];

                $tds = CHtml::tag('td', array(), ($i+1).". ".$question->text);

                for ($j = 0; $j < $question->num_choices; ++$j)
                {
                    $radio = $form->radioButton($question, "[$i]answer", array(
                        'id'=>"survey-$i-$j",
                        'value'=>($j + 1),
                        'uncheckValue'=>null,
                    ));

                    $tds .= CHtml::tag('td', array(), $radio);
                }

                $htmlOptions = $i % 2 ? array('class'=>'banded') : array();
                echo CHtml::tag('tr', $htmlOptions, $tds);
            }
        ?>
    </tbody>
</table>





<?php
// Collect a comment and be done with it.
echo printField($form, $model, 'comment', 'textarea', array('class' => 'stretch-to-fit'));

echo CHtml::submitButton();
$this->endFormRender();
