<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <link href="<?=Yii::app()->theme->getBaseUrl();?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!-- ******************		CONTENT START ***************************** -->
<div class="container" id="page">

    <div id="header">
    	<ol class="top_links">
            <li><a href="#">Свежий</a></li>
            <li><a href="#">Лучший</a></li>
            <li><a href="#">Популярный</a></li>
        </ol>
    </div>

	<?php echo $content; ?>    
</div>
<!-- ******************		CONTENT END ******************************* -->

<!-- ******************		FOOTER START ****************************** -->
<div id="footer">
    <?php $this->renderPartial('//layouts/footer'); ?>
</div>
<!-- ******************		FOOTER END ******************************** -->

</body>
</html>