<?php

namespace frontend\controllers;
use yii;
use frontend\models\Cart;
use frontend\models\Order;
use frontend\models\Collect;
use frontend\models\Sort;


class UcenterController extends \yii\web\Controller
{
    public $layout="main";
    public function actionIndex()
    {
        $session=yii::$app->session;
        $id=$session->get('id');
        $name=$session->get('name');
        //用户积分
        $res=yii::$app->db->createCommand("select * from user where user_id='$id'")->queryOne();
        //print_r($res);
        //未完成订单
        $cart=Cart::find()->andWhere(['user_name'=>$name])->count('cart_id');
        //完成的订单
        $order=Order::find()->andWhere(['user_id'=>$id])->count('order_id');
        //print_r($order);

        $rorder=new Order();
        $lists=$rorder->sel_order($id);
        //print_r($lists);
        //收藏
        $collect=new Collect();
        $data=$collect->sel_collect($id);
       // print_r($data);

        $id=isset($_COOKIE['old'])?$_COOKIE['old']:1;
        $old_goods=yii::$app->db->createCommand("select * from goods where goods_id in($id)")->queryAll();
       // print_r($old_goods);
        //主菜单
        $model=new Sort();
        $sort1=$model->sel_sort();
        $list1=new Sort();
        $sorts=$list1->sel_sorts();
        return $this->render('User_Center',['res'=>$res,'order'=>$order,'cart'=>$cart,'lists'=>$lists,'data'=>$data,'old_goods'=>$old_goods,'sort'=>$sort1,'sorts'=>$sorts]);
    }

}
