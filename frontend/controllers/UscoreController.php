<?php

namespace frontend\controllers;
use yii;
use frontend\models\Sort;
header("Content-type: text/html; charset=utf-8");
class UscoreController extends \yii\web\Controller
{
	public $layout="main";
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $id=$session->get('id');
        $model=yii::$app->db->createCommand("select * from user where user_id='$id'")->queryOne();
        $sql=yii::$app->db->createCommand("select * from `order` where user_id='$id'")->queryAll();
        //print_r($sql);die;
        //主菜单
        $model1=new Sort();
        $sort1=$model1->sel_sort();
        $lists=new Sort();
        $sorts=$lists->sel_sorts();
        return $this->render('user_score',['res'=>$sql,'data'=>$model,'sort'=>$sort1,'sorts'=>$sorts]);
    }

}
