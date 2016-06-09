<?php

namespace frontend\controllers;

class UcenterController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('User_Center');
    }

}
