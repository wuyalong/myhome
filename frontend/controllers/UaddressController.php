<?php

namespace frontend\controllers;
use yii;
use frontend\models\Sort;

class UaddressController extends \yii\web\Controller
{
	public $layout="main";
    public function actionIndex()
    {
        $session=yii::$app->session;
        $id=$session->get('id');
        $res=yii::$app->db->createCommand("select * from address where user_id='$id'")->queryAll();
        $model=new Sort();
        $sort_list=$model->sel_sort();
        $lists=new Sort();
        $sorts=$lists->sel_sorts();

        //$data=yii::$app->db->createCommand("select * from region where parent_id=1")->queryAll();
        return $this->render('user_address',['data'=>$res,'sort'=>$sort_list,'sorts'=>$sorts]);
    }
    public function actionCity_list(){
        $p_id=yii::$app->request->get('p_id');
        $arr=Yii::$app->db->createCommand("select * from region where parent_id='$p_id'")->queryAll();
        echo json_encode($arr);


    }
    public $enableCsrfValidation = false;
    public function actionAdd_address(){
        $arr=yii::$app->request->post();
        $session=yii::$app->session;
        $id=$session->get('id');
        //print_r($arr);
        $address_name=$arr['name'];
        $address_place=$arr['address'];
        $address_email=$arr['address_email'];
        $address_phone=$arr['phone'];
        $address_tel=$arr['address_tel'];
        $res=yii::$app->db->createCommand("insert into address (address_name,user_id,address_place,address_num,address_phone,address_tel) values('$address_name','$id','$address_place',' $address_email','$address_phone','$address_tel')")->execute();
        if($res){
          echo "<script>alert('设置成功');</script>";
            $this->redirect("index.php?r=uaddress/index");

        }

    }
    public function actionDel(){
        $id=yii::$app->request->get('id');
        $sql=yii::$app->db->createCommand("delete from address where address_id='$id'")->execute();
        $this->redirect("index.php?r=uaddress/index");

    }




}
