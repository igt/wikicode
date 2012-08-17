<?php

/**
 * Данный контроллер является кастомизированным вариантом базового контроллера
 * Все классы контроллеров данного приложения должны быть потомками от этого родительского класса
 */
class Controller extends CController
{
	/**
	 * @var string установка разметки для отображения контроллера по умолчанию.
     * Дефолтное значение '//layouts/column1',
	 * означает использование единственной колонки. Файл 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
    
    /**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
    
    /**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
    
    public $pageTitle = "";
    
    public function beforeAction($action)
    {
        // If application is using a theme, replace default layout controller variable that start with '//layouts/' with a theme link
        if(empty(Yii::app()->theme->name) == false && isset($this->layout) == true && strpos($this->layout, '//layouts/') === 0)
        {
            // Replace path with slash by dot.
            $sThemeLayout = 'webroot.themes.'.Yii::app()->theme->name.'.views.layouts.'.str_replace('/', '.', substr($this->layout,10));

            // If theme override given layout, get it from theme
            if($this->getLayoutFile($sThemeLayout) !== false)
                $this->layout = $sThemeLayout;
        }
        return true;
    }
}