<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="content-container">
    <div class="left-column">
        <?php echo $content; ?>
    </div>
    <div class="right-column">
        <?php echo $this->clips['sidebar']; ?>
    </div>
</div>
<?php $this->endContent(); ?>
