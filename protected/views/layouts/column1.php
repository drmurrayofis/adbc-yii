<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <div class="content-container">
        <?php
            if ($this->isInCmod() && !$this->isInTopic())
            {
                echo $this->renderCourseNavigation();
            }
            echo $content;
        ?>
    </div>
<?php $this->endContent(); ?>
