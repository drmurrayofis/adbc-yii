<?php

/**
 * Generates code for new topics according to console app configuration.
 * 
 * See https://github.com/zyrolasting/adbc-yii/wiki/Yiic-Commands
 *
 * @author Sage Gerard
 * @version 0.1
 * @package application.commands
 */
class NewTopicCommand extends CConsoleCommand
{
    /**
     * @var string Path to the skeleton for topic data on the file system.
     */
    private $skel_path;


    /**
     * @var array An associative array that maps files in the skeleton directory to directories in Yii
     */
    private $map;



    /**
     * Copies topic skeleton for input topics according to a map.
     *
     * See https://github.com/zyrolasting/adbc-yii/wiki/Yiic-Commands
     * for more details.
     *
     * @param array $args Anonymous arguments from the command line
     * @return void
     */
    public function run($args)
    {
        if (empty($args))
        {
            echo "No topic names provided. Exiting.\n";
            return;
        }

        $yii = Yii::app();
        $this->map = $yii->params['topicSkeletonMap'];
        $this->skel_path = $yii->params['topicSkeletonPath'];

        foreach ($args as $topic_name)
        {
            // Only names-like-this are valid.
            if (!preg_match('/^[a-z-]+$/', $topic_name))
            {
                echo "$topic_name not valid. Skipping.\n";
            }

            // Copy from skeleton directory according to map.
            foreach ($this->map as $skel_src => $skel_dst)
            {
                $src = $this->getSrcFileName($skel_src);
                $dst = $this->getDstFileName($src, $skel_dst, $topic_name);

                echo "Copying $src\n\t-> $dst... ";

                if (!copy($src, $dst))
                {
                    echo "Copy failed. Deleting $topic_name...\n";
                    $this->rollbackTopic($topic_name);
                    break;
                }

                echo "done\n\n";
            }
        }
    }



    /**
     * Returns the source file name from the skeleton directory to copy
     *
     * @param string Name in the skeleton directory to copy.
     * @return string
     */
    private function getSrcFileName($file_name)
    {
        return $this->skel_path.DIRECTORY_SEPARATOR.$file_name;
    }



    /**
     * Returns the destination name to which to copy the source file. 
     *
     * @param string $skel_file Use value from {@link NewTopicCommand::getSrcFileName}
     * @param string $dst_directory The directory to which the file will be copied
     * @param string $topic_name The name of the relevant course topic
     * @return string
     */
    private function getDstFileName($skel_file, $dst_directory, $topic_name)
    {
        $ext = pathinfo($skel_file, PATHINFO_EXTENSION);
        return $dst_directory.DIRECTORY_SEPARATOR.$topic_name.'.'.$ext;
    }



    /**
     * Deletes all files for a topic according to the map. Use in an error condition.
     *
     * @param string $topic_name The topic to delete
     * @return void
     */
    public function rollbackTopic($topic_name)
    {
        foreach ($this->map as $skel_src=>$skel_dst)
        {
            $src = $this->getSrcFileName($skel_src);
            $dst = $this->getDstFileName($src, $skel_dst, $topic_name);

            if (is_writable($dst))
            {
                unlink($dst);
            }
        }
    }
}
