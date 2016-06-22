<?php

namespace frontend\controllers;
use yii;
use frontend\models\Sort;



class UinfoController extends \yii\web\Controller
{
	public $layout="main";
    public function actionIndex()
    {
        $model=new Sort();
        $sort_list=$model->sel_sort();
        $lists=new Sort();
        $sorts=$lists->sel_sorts();
        return $this->render('user_info',['sort'=>$sort_list,'sorts'=>$sorts]);
    }
    public function actionUpuser(){
        $arr=yii::$app->request->get();
        //print_r($arr);
        $id=$arr['id'];
        $nickname=$arr['nickname'];
        $name=$arr['username'];
        $email=$arr['email'];
        $phone=$arr['phone'];
        $sel=yii::$app->db->createCommand("update user set user_name='$name',user_nickname='$nickname',user_email='$email',user_phone='$phone' where user_id='$id'")->queryAll();
        if($sel){
            echo 1;
        }else{
            echo 0;
        }

    }

}
