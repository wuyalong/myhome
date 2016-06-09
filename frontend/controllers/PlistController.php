<?php

namespace frontend\controllers;

class PlistController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('Product_List');
    }

}
