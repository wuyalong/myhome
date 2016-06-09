<?php

namespace frontend\controllers;

class UcollectController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('user_Collect');
    }

}
