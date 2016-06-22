<?php

namespace frontend\controllers;
use yii;

class RegisterController extends \yii\web\Controller
{
    public $layout="main";
    public function actionIndex()
    {
        return $this->render('registered');
    }

    /**
     * 注册
     */
    public $enableCsrfValidation = false;
    public function actionZhuce()
    {
        $arr = yii::$app->request->post();
        //print_r($arr);die;
        $name=$arr['name'];
        $pwd=$arr['pwd'];
        $nickname=$arr['nickname'];
        $email=$arr['email'];
        //echo $email;die;
        $sql=yii::$app->db->createCommand("insert into user (user_name,user_password,user_nickname,user_email) values('$name','$pwd','$nickname','$email')")->query();
        if($sql){
            $this->redirect("index.php?r=login/index");
        }



    }
    function actionCode(){
        $phone=yii::$app->request->get('phone');
        $num=rand(1000,9999);
        //echo $num;

        $content=file_get_contents("http://api.k780.com:88/?app=sms.send&tempid=50660&phone=$phone&param=code%3d$num&appkey=17760&sign=b62725b7b8eee28e540d4c82555a3fb4&format=json");

        http://api.k780.com:88/?app=sms.send&tempid=你创建的模板ID&param=替换参数&phone=手机号码&appkey=您申请的APPKEY&sign=您申请的SIGN&format=json
        print_r($content);

    }
    public function actionCheck_one(){
        $name=yii::$app->request->get('name');
        //echo $name;
        $sql=yii::$app->db->createCommand("select * from user where user_name='$name'")->queryAll();
        if(count($sql)>0){
            echo 1;
        }else{
            echo 0;
        }
    }


}
