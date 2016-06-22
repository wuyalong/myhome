<?php

namespace frontend\controllers;
use yii;
use frontend\models\Sort;

class UpwdController extends \yii\web\Controller
{
	public $layout="main";
    public function actionIndex()
    {
        $model=new Sort();
        $sort_list=$model->sel_sort();
        $lists=new Sort();
        $sorts=$lists->sel_sorts();

        return $this->render('user_Password',['sort'=>$sort_list,'sorts'=>$sorts]);
    }
    public function actionCheck_pwd(){
        $pwd=yii::$app->request->get('pwd');
        $session=yii::$app->session;
        $id=$session->get('id');
        //print_r($id);die;
        $arr=yii::$app->db->createCommand("select user_password from user where user_id='$id' ")->queryOne();
        //print_r($arr);
        if($arr['user_password']==$pwd){
            echo 1;
        }else{
            echo 0;
        }

    }
    public $enableCsrfValidation = false;
    public function actionUp_pwd(){
        $arr=yii::$app->request->post();
        //print_r($arr);
        $session=yii::$app->session;
        $id=$session->get('id');
        $npwd=$arr['pwd1'];
        $res=yii::$app->db->createCommand("update user  set user_password='$npwd' where user_id='$id' ")->execute();
        if($res){
            echo "<script>alert('修改成功');location.href='index.php?r=login/index'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='index.php?r=upwd/index'</script>";
        }


    }

}
