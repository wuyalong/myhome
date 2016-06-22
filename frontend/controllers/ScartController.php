<?php

namespace frontend\controllers;
use yii;
use frontend\models\Cart;
use frontend\models\Sku;
use yii\data\Pagination;
header('content-type:text/html;charset=utf-8');
class ScartController extends \yii\web\Controller
{
	public $layout='main';
    /**
     * 购物车列表显示
     */
    public function actionIndex()
    {	
        //print_r($_COOKIE['cartinfo']);die;
        $connection = Yii::$app->db;
        $session = Yii::$app->session;
        $username = $session->get('name');
        if($username){
            $cart_count =$connection->createCommand("SELECT count(*) as counts FROM cart WHERE user_name='$username'");
            $counts = $cart_count->queryOne();
            $count=$counts['counts'];
        }
        if($username==''){
            if(isset($_COOKIE['cartinfo'])){
                $cartinfo=unserialize($_COOKIE['cartinfo']);
                //setcookie('cartinfo','',time()-1);
                //print_r($cartinfo);die;
                $count=count($cartinfo);                
            }else{
                $count=1;
            }
        }
        //print_r($counts);die;
        //分页
        
        $page=isset($_GET['page'])?$_GET['page']:1;
        $pages = 100;
        $page_size = ceil($count/$pages);
        $prev = $page<=1?1:$page-1;
        $next = $page>=$page_size?$page:$page+1;
        $limit = ($page-1)*$pages;
        $str = 'index.php?r=scart/index';
        $prev1 = "<a href='$str&page=$prev'>上一页</a>";
        $next1 = "<a href='$str&page=$next'>下一页</a>";
        $first1 = "<a href='$str&page=1'>首页</a>";
        $last1 = "<a href='$str&page=$page_size'>尾页</a>";
        $data['up_page'] = $prev1;
        $data['down_page'] = $next1;
        $data['first'] = $first1;
        $data['last'] = $last1;
        $data['page_num'] = $page_size;

        if($username==''){
            if(isset($_COOKIE['cartinfo'])){                
                $cartinfo=unserialize($_COOKIE['cartinfo']);
                //setcookie('cartinfo','',time()-1);
                //print_r($cartinfo);
            }
            else{
                $cartinfo='';
            }
        }
        if($username){
            $command = $connection->createCommand("SELECT cart.cart_id,cart.sku_id,sku.sku_img,cart.cart_size,cart.cart_color,goods.goods_name,cart.cart_total,cart.cart_goodsprice,cart.cart_num FROM cart inner join sku on sku.sku_id=cart.sku_id inner join goods on goods.goods_id=sku.goods_id WHERE user_name='$username' and cart.cart_num>0 limit $limit,$pages");
            $cartinfo= $command->queryAll();
            //$total = $connection->createCommand("SELECT ");
        } 
        return $this->render('shopping_cart',['cartinfo'=>$cartinfo,'data'=>$data]);
    }
    /**
     * 删除购物车商品
     */
    public function actionCartdel()
    {
    	$cartmodel = new Cart();
        $request = Yii::$app->request;
        $cart_id = $request->get('cart_id');
        $cart = $cartmodel->del_cart($cart_id);
        //print_r($cart);die;
        echo $cart;
    }
    /**
     * 所选商品的总计
     */
   public function actionCartzj(){
        $request = Yii::$app->request;
        $ids = $request->get('ids');
        if(strpos($ids,',')){
            $idss=array();
            $idss=explode(',',$ids);
            $arr['num']=count($idss);
            $arr['infos']=$idss;
            print_r(json_encode($arr));
        }
        if(!strpos($ids,',')&&$ids!=''){
            $arr['num']=1;
           // $arr['infos']=$ids;
            print_r(json_encode($arr));
        }
        if($ids==''){
            $arr['num']=0;
           // $arr['infos']=$ids;
            print_r(json_encode($arr));
        }  
   }

}
