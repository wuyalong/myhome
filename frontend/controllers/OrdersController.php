<?php

namespace frontend\controllers;

class OrdersController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('Orders');
    }

}
