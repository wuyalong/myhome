<?php

namespace frontend\controllers;
use yii;
header("Content-type: text/html; charset=utf-8");
class IndexController extends \yii\web\Controller
{
	/*
	 **首页展示
	 */

    public $layout="main";
    public function actionIndex()
    {
        $goods_hot=yii::$app->db->createCommand("select * from goods as g inner join sort as s on g.sort_id=s.sort_id where goods_hot=1 limit 5")->queryAll();
        $goods_lamp=yii::$app->db->createCommand("select * from goods as g inner join sort as s on g.sort_id=s.sort_id where s.sort_id=4 limit 8")->queryAll();
        $goods_bed=yii::$app->db->createCommand("select * from goods as g inner join sort as s on g.sort_id=s.sort_id where s.sort_id=3 limit 8")->queryAll();
        $goods_all=yii::$app->db->createCommand("select * from goods as g inner join sort as s on g.sort_id=s.sort_id where s.sort_id=5 limit 8")->queryAll();

        return $this->render('index',['goods_hot'=>$goods_hot,'goods_lamp'=>$goods_lamp,'goods_bed'=>$goods_bed,'goods_all'=>$goods_all]);
    }

}
