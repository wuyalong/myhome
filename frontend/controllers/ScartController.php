<?php

namespace frontend\controllers;

class ScartController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('shopping_cart');
    }

}
