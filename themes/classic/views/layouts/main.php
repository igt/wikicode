<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

<!-- ******************		CONTENT START ***************************** -->
	<?php echo $content; ?>
<!-- ******************		CONTENT END ******************************* -->

<!-- ******************		FOOTER START ****************************** -->
    <?php $this->renderPartial('//layouts/footer'); ?>
<!-- ******************		FOOTER END ******************************** -->

</div>

</body>
</html>