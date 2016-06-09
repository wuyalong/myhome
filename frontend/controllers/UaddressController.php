<?php

namespace frontend\controllers;

class UaddressController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('user_address');
    }

}
