<?php /* @var $this Controller */ ?>
<?php $base_url = Yii::app()->request->baseUrl; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="language" content="en" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Animated DataBase Courseware - <?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/adbc.css" media="screen,projection" />
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <div id="submenuBar"></div>
        <div id="main">
            <div id="header">
                <div id="adbclogo">
                    <a href="/"><img src="/images/adbc.png" alt="ADbC logo" title="ADbC logo" hspace="0" vspace="0" border="0"></a>
                </div>
                <div id="headerText">
                    <div id="headerTitle" class="larger bold">Animated DataBase Courseware</div>
                    <div id="headerSubtitle" class="large bold">Interactive Approach for Teaching the Principles of DataBase Concepts</div>
                    <div class="smalltext"></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

            <div id="Menu">
                <div id="mainmenu">
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'htmlOptions'=>array(
                            'class'=>'inline-menu',
                        ),
                        'activeCssClass'=>'selected',
                        'items'=>array(
                            array('label'=>'Database Design', 'url'=>array('/design')),
                            array('label'=>'SQL', 'url'=>array('/sql')),
                            array('label'=>'Transactions', 'url'=>array('/transactions')),
                            array('label'=>'Security', 'url'=>array('/security')),
                            array('label'=>'Info', 'url'=>array('/info')),
                        ),
                    )); ?>
                </div>
                <div id="submenu"></div>
            </div>

            <?php echo $content; ?>

            <div id="nsfinfo">
                <div id="nsfText">Funded by NSF Grant #0717707</div>
                <div id="nsfLogo"></div>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>
