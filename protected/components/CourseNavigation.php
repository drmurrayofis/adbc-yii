<?php

/**
 * Prepares navigation UIs for ADbC course content.
 */
class CourseNavigation
{
    /**
     * @return string HTML
     */
    public function renderCmodNavigation($cmod_id)
    {
        $smods = CourseMeta::getSmods($cmod_id);

        $html = "";
        foreach ($smods as $name=>$topics)
        {
            $html .= self::renderSmodNavigation($cmod_id, $name, $topics);
        }

        return CHtml::tag('div', array('class'=>'accordion'), $html);
    }
    

    /**
     * Render SMOD navigation.
     * 
     * @param string $smod_name Contents of a leading <h1> tag.
     * @param array $topics Associative array of topics with child keys "name" and "description"
     * @return string
     */
    public static function renderSmodNavigation($cmod_id, $smod_name, $topics = array())
    {
        $h1 = CHtml::tag('h1', array('class'=>'topics-smod_name'), $smod_name);

        $lis = "";
        foreach ($topics as $name=>$metadata)
        {
            $class = rtrim('topic-name '.get($metadata['class'])); // rtrim removes possible space at end.

            $link = self::renderTopicLink($cmod_id, $smod_name, $name, $class);
            $desc = self::renderTopicDescription(get($metadata['description']));

            $lis .= CHtml::tag('li', array(), $link.$desc);
        }

        $ul = CHtml::tag('ul', array('class'=>'topics-listing'), $lis);

        return $h1 . CHtml::tag('div', array('class'=>'topic-block'), $ul);
    }

    
    public static function renderTopicLink($cmod_id, $smod_name, $topic_name, $cssClass="")
    {
        $sid = CourseMeta::nameToId($smod_name);
        $tid = CourseMeta::nameToId($topic_name);
        $url = Yii::app()->createUrl('/' . $cmod_id . '/' . $sid . '/' . $tid);

        return CHtml::link($topic_name, $url, array('class'=>$cssClass));

    }

    public static function renderTopicDescription($html)
    {
        return CHtml::tag('p', array('class'=>'topic-description'), $html);
    }



    /**
     * @return string Navigation HTML for topics near the current topic.
     */
    public static function renderRelativeNavigation($cmod_id, $smod_id, $current_topic_id)
    {
        $names = CourseMeta::getTopicNames($cmod_id, $smod_id);
        $ids   = CourseMeta::getTopicIds($cmod_id, $smod_id);

        // Find the index of the action id from the course catalog
        $index = array_search($current_topic_id, $ids);

        // Build relative navigation UI
        $links = "";

        // If the current action is not the first one...
        if ($index > 0)
        {
            $i = $ids[$index - 1];
            $n = $names[$index - 1];
            $links .= CHtml::link("&laquo; $n", '/'.$cmod_id.'/'.$smod_id.'/'.$i);
        }

        // Render index action so that user can return to topic selection
        $links .= CHtml::link('[Index]', '/'.$cmod_id);

        // If the current index is not the last one...
        if ($index < (count($ids) - 1))
        {
            $i = $ids[$index + 1];
            $n = $names[$index + 1];
            $links .= CHtml::link("$n &raquo;", '/'.$cmod_id.'/'.$smod_id.'/'.$i);
        }

        return CHtml::tag('nav', array('class'=>'topic-relative-nav'), $links);
    }

}
