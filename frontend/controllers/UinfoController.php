<?php

namespace frontend\controllers;

class UinfoController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('user_info');
    }

}
