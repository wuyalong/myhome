<?php

namespace frontend\controllers;

class PdetailController extends \yii\web\Controller
{
	public $layout=false;
    public function actionIndex()
    {
        return $this->render('Product_Detailed');
    }

}
