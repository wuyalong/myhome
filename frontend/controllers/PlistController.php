<?php

namespace frontend\controllers;
use yii;
class PlistController extends \yii\web\Controller
{
	public $layout="main";
    public function actionIndex()
    {
        $id=yii::$app->request->get('id');
        //echo $id;die;
        $sel=yii::$app->db->createCommand("select * from goods where sort_id='$id'")->queryAll();
        $sort=yii::$app->db->createCommand("select * from sort where sort_type=0")->queryAll();
        $sorts=yii::$app->db->createCommand("select * from sort where sort_type=1")->queryAll();
        $items=yii::$app->db->createCommand("select * from type ")->queryAll();
        $items=yii::$app->db->createCommand("select * from type ")->queryAll();
        //print_r($type);die;
        $i=1;
        foreach($items as $value){
            $tmp[$i] = $value;
            $i++;
        }
        $trees = $this->actionTree($tmp);
        //print_r($trees);die;


        return $this->render('Product_List',['sort'=>$sort,'sorts'=>$sorts,'data'=>$trees,'sel'=>$sel]);
    }
    function actionTree($items){
        foreach($items as $item)
            $items[$item['p_id']]['son'][$item['t_id']] = &$items[$item['t_id']];
        return isset($items[0]['son']) ? $items[0]['son'] : array();
    }
    public function actionAdd_goods(){
        $sku_id=yii::$app->request->get('id');
        $session=yii::$app->session;
        $user_id=$session->get('id');
        $time=date('Y-m-d H:i:s',time());
        //echo $time;
        $sql=yii::$app->db->createCommand("insert into collect (sku_id,user_id,user_data) values('$sku_id','$user_id','$time')")->execute();
        if($sql){
            echo 1;
        }else{
            echo 0;
        }


    }

}
