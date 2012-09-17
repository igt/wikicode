<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - ' . Yii::t('main','Main page name');
?>

<div class="search">
    <div class="logo"></div>
    <h1><?=Yii::t('main','Main page name');?></h1>
    <form>
        <input type="text" /><br /><br />
        <button name="btnS" type="submit" class="submit"><span id="subtext">Поиск в WikiCode</span></button>
        <button name="btnS" type="submit" class="submit"><span id="subtext">Добавить код</span></button>
    </form>
</div>