<?php

namespace frontend\controllers;
use yii;
use frontend\models\Collect;
use frontend\models\Cart;
use frontend\models\Sort;

class UcollectController extends \yii\web\Controller
{
	public $layout="main";
    public function actionIndex()
    {
        $session=yii::$app->session;
        $id=$session->get('id');
        $model=new Collect();
        $arr=$model->sel_select($id);
        //print_r($arr);
        $model=new Sort();
        $sort1=$model->sel_sort();
        $lists=new Sort();
        $sorts=$lists->sel_sorts();
        return $this->render('user_Collect',['arr'=>$arr,'sort'=>$sort1,'sorts'=>$sorts]);
    }
    public function actionDel_collect(){
        $id=yii::$app->request->get('id');
        //echo $id;
        $res=yii::$app->db->createCommand("delete from goods where goods_id='$id'")->execute();
        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }

}
