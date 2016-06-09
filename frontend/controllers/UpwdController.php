<?php

namespace frontend\controllers;

class UpwdController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('user_Password');
    }

}
