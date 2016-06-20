<?php

namespace frontend\controllers;
use yii;

class LoginController extends \yii\web\Controller
{
    public $layout=false;
    public function actionIndex()
    {
        return $this->render('login');
    }
    public function actionLogin_list()
    {
        date_default_timezone_set('Asia/Shanghai');//设置时区为东八区
        $name=yii::$app->request->get('name');
        $pwd=yii::$app->request->get('pwd');
       // echo $pwd;
        $arr=yii::$app->db->createCommand("select * from user where user_name='$name'")->queryOne();
      // print_r($arr);
        if($arr){
            if($arr['user_password']==$pwd){
                setCookie('login_now',date('Y-m-d H:i:s'),time()+3600*24);
                $u_name=$arr['user_name'];
                $u_id=$arr['user_id'];
                $session = Yii::$app->session;
                $session->set('name',"$u_name");
                $session->set('id',"$u_id");
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo 2;
        }




    }

}
