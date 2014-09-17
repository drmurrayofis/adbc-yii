<?php /* @var $this Controller */ ?>
<?php $base_url = Yii::app()->request->baseUrl; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Animated DataBase Courseware - <?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/adbc.css" media="screen,projection" />
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    </head>
    <body>
    <div id="sticky-footer-root" class="<?php echo ($this->isHomePage()) ? 'home' : ''; ?>">
            <header>
                <a href="/"><img src="/images/adbc.png"
                     alt="Animated Database Courseware logo"
                     class="logo"></a>
            <?php
                $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array(
                        'class'=>'navbar inline-list pull-right',
                    ),
                    'activeCssClass'=>'selected',
                    'items'=>$this->menu,
                ));

            ?>
            </header>

            <?php
                
                if (!empty($this->submenu))
                {
                    $this->widget('zii.widgets.CMenu',array(
                        'htmlOptions'=>array(
                            'class'=>'subnav inline-list',
                        ),
                        'activeCssClass'=>'selected',
                        'items'=>$this->submenu,
                    ));
                }


                echo $content;

            ?>
            <div id="sticky-footer-root-end"></div>
        </div>
        <footer>
            <ul class="footer-images">
                <li>
                <a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=0717707"><img src="/images/nsf-logo.png"
                     alt="National Science Foundation logo referencing
                          grant #0717707 for Animated Database Courseware"></a>
                </li>
                <li>
                <a href="http://kennesaw.edu"><img src="/images/ksuowl.png"
                     alt="Kennesaw State University Owl logo"></a>
                </li>
            </ul>
        </footer>
    </body>
</html>
