<?php

/**
 * Returns information about ADbC CMODs, SMODs and topics.
 */
class CourseMeta extends CBehavior
{


    /**
     * @return array All course module (CMOD) information
     */
    public static function getCmods()
    {
        return Yii::app()->params['adbcTopics'];
    }



    /**
     * @return array All submodule (SMOD) information in a CMOD
     */
    public static function getSmods($cmod_id)
    {
        return self::findNameById($cmod_id, CourseMeta::getCmods());
    }



    /**
     * @return array All topic information under a SMOD and CMOD
     */
    public static function getTopics($cmod_id, $smod_id)
    {
        return self::findNameById($smod_id, CourseMeta::getSmods($cmod_id));
    }



    /**
     * @return array List of all CMOD names registered in ADbC
     */
    public static function getCmodNames()
    {
        return array_keys(self::getCmods());
    }



    /**
     * @return array List of all SMOD names registered under a CMOD
     */
    public static function getSmodNames($cmod_id)
    {
        return array_keys(self::getSmods($cmod_id));
    }



    /**
     * @return array List of all topic names registered under a SMOD
     */
    public static function getTopicNames($cmod_id, $smod_id)
    {
        return array_keys(self::getTopics($cmod_id, $smod_id));
    }



    /**
     * @return array All CMOD ids
     */
    public static function getCmodIds()
    {
        return self::mapNamesToIds(self::getCmodNames());
    }



    /**
     * @return array All SMOD ids under a CMOD
     */
    public static function getSmodIds($cmod_id)
    {
        return self::mapNamesToIds(self::getSmodNames($cmod_id));
    }



    /**
     * @return array All topic ids under a SMOD
     */
    public static function getTopicIds($cmod_id, $smod_id)
    {
        return self::mapNamesToIds(self::getTopicNames($cmod_id, $smod_id));
    }



    /**
     * @return array A list of ids that correspond to the input array of names.
     */
    public static function mapNamesToIds(&$names)
    {
        return array_map(function($n){
            return CourseMeta::nameToId($n);
        }, $names);
    }


    /**
     * @param $name string A human-readable string containing only single spaces (no newlines, tabs, etc)
     * @return string An identifier string used for CMOD, SMOD and topic IDs.
     */
    public static function nameToId($name)
    {
        return strtolower(str_replace(" ", "", $name));
    }

    /**
     * Searches an array for a value keyed by a string that, when
     * converted to an ADbC identifier, matches the $id argument.
     */
    public static function findNameById($id, $array)
    {
        foreach ($array as $k=>$v)
        {
            if (CourseMeta::nameToId($k) === $id)
            {
                return $v;
            }
        }

        return null;
    }
}
