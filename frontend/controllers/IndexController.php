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
        //主导航栏
        $sort=yii::$app->db->createCommand("select * from sort where sort_type=0")->queryAll();
        $sorts=yii::$app->db->createCommand("select * from sort where sort_type=1")->queryAll();

        //循环左菜单栏
        //$items=yii::$app->db->createCommand("select * from type ")->queryAll();
        $items=yii::$app->db->createCommand("select * from type ")->queryAll();
        //print_r($type);die;
        $i=1;
        foreach($items as $value){
            $tmp[$i] = $value;
            $i++;
        }
        $trees = $this->actionTree($tmp);
       //print_r($trees);die;
        return $this->render('index',['goods_hot'=>$goods_hot,'goods_lamp'=>$goods_lamp,'goods_bed'=>$goods_bed,'goods_all'=>$goods_all,'data'=>$trees,'sort'=>$sort,'sorts'=>$sorts]);
    }
    function actionTree($items){
        foreach($items as $item)
            $items[$item['p_id']]['son'][$item['t_id']] = &$items[$item['t_id']];
        return isset($items[0]['son']) ? $items[0]['son'] : array();
    }
    public function actionOld_sel(){
        $content_id = array();//1.创建一个数组

        $content_id[] =yii::$app->request->get('id'); //2.对接受到的ID插入到数组中去

        if(isset($_COOKIE['content_id'])) //3.判定cookie是否存在,第一次不存在(如果存在的话)

        {

            $now_content = str_replace("\\", "", $_COOKIE['content_id']);//(4).您可以查看下cookie,此时如果unserialize的话出问题的,我把里面的斜杠去掉了

            $now = unserialize($now_content); //(5).把cookie 中的serialize生成的字符串反实例化成数组

            foreach($now as $n=>$w) { //(6).里面很多元素,所以我要foreach 出值

                if(!in_array($w,$content_id)) //(7).判定这个值是否存在,如果存在的化我就不插入到数组里面去;

                {

                    $content_id[] = $w; //(8).插入到数组

                }

            }

            $content= serialize($content_id); //(9).把数组实例化成字符串

            setcookie("content_id",$content, time()+3600*24); //(10).插入到cookie

        }else {

            $content= serialize($content_id);//4.把数组实例化成字符串

            setcookie("content_id",$content, time()+3600*24); //5.生成cookie

        }

        $getcontent = unserialize(str_replace("\\", "", $_COOKIE['content_id']));
        //print_r($getcontent);die;
      $str='';
        foreach($getcontent as $row=>$r) {

         $str.=$r.',';

        }
        $st=substr($str,0,-1);
        setcookie('old',$st,time()+60*24*3600);

    }



}
