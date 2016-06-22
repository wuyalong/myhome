<?php
namespace frontend\controllers;
use yii;
header('content-type:text/html;charset=utf-8');
class PdetailController extends \yii\web\Controller
{
	public $layout='main';
    /**
     * 商品详情页展示
     * @return [type] [description]
     */
    public function actionIndex()
    {
    	$request = Yii::$app->request;
        //首页传过来的商品id(有待慧娜解决)
    	$goods_id = $request->get('goods_id');  
        $sku_id = $request->get('sku_id');   
    	$connection = Yii::$app->db;
        if($goods_id){
            if($sku_id){
                $command2 = $connection->createCommand("SELECT * FROM sku WHERE sku.sku_id='$sku_id' and goods_id='$goods_id'");   
                $goodsdetail2 = $command2->queryAll();
            }
            else{
                $command2 = $connection->createCommand("SELECT * FROM goods WHERE goods_id='$goods_id'");
                $goodsdetail2 = $command2->queryAll();
            }
        }
    	$command = $connection->createCommand("SELECT * FROM goods left join sku on goods.goods_id=sku.goods_id WHERE sku.goods_id='$goods_id' and sku.sku_num>0 group by sku.sku_size");
        $goods_kc = $connection->createCommand("SELECT sum(sku_num) as counts FROM sku WHERE goods_id='$goods_id'");
        $goods = $connection->createCommand("SELECT * FROM goods WHERE goods_id='$goods_id'");
        $goodsdetail = $command->queryAll();
        $goods_counts = $goods_kc->queryOne();
        $goods_name = $goods->queryAll(); 
		//print_r($goods_counts);die;
        return $this->render('Product_Detailed',['goodsdetail'=>$goodsdetail,'goodsdetail2'=>$goodsdetail2,'goods_counts'=>$goods_counts,'goods_name'=>$goods_name]);
    }
    /*
     *@sku单品信息
     */
     public function actionSkuinfo()
    {

    	$request = Yii::$app->request;
        $goods_id = $request->get('goods_id');  
    	$sku_id = $request->get('sku_id');  
        $sku_sc = $request->get('sku_sc');  
    	$connection = Yii::$app->db;
    	$command = $connection->createCommand("SELECT * FROM sku WHERE sku_id='$sku_id'");
    	$skuinfo['infos'] = $command->queryAll();
        $command2 = $connection->createCommand("SELECT * FROM sku WHERE sku_id='$sku_id'");
        $skuinfo['colors'] = $command2->queryAll();
        //单品库存
        $command3 = $connection->createCommand("SELECT * FROM sku WHERE sku_id='$sku_id'");
        $skuinfo['skunum'] = $command3->queryAll();
        //print_r( $skuinfo['colors']);die;
    	echo json_encode($skuinfo);
    }
    /**
     * 加入购物车
     */
    public function actionAddtocart(){
        //接受登录时记住的用户session['name'];(用户名唯一)
        $session = Yii::$app->session;
        $request = Yii::$app->request;
        $connection = Yii::$app->db;
        $username = $session->get('name');
        //$totals=$request->get('totals');
        //1.用户未登录时
        if($username==''){
            $cartinfo1=$_GET;
            //$cartinfo=serialize($cartinfo1);
            //setcookie('cartinfo',$cartinfo,time()+1200);
            if(isset($_COOKIE['cartinfo'])){
                
                $cartinfo=unserialize($_COOKIE['cartinfo']);
                
                foreach($cartinfo as $v){
                    if(in_array($cartinfo1['sku_id'],$v)){
                         echo "exist";die;
                    }
                }
                $cartinfo[]=$cartinfo1;
                $cartinfo=serialize($cartinfo);
                setcookie('cartinfo',$cartinfo,time()+1200);
            }
            else{
                $cartinfo2=array();
                $cartinfo2[]=$cartinfo1;
                $cartinfo=serialize($cartinfo2);
                setcookie('cartinfo',$cartinfo,time()+1200);
            }            
            echo 'nouser';
            //$this->redirect('index.php?r=scart/index');
            //print($_COOKIE['cartinfo']);die;
        }
        else{
            $sku_id=$_GET['sku_id'];
            $command = $connection->createCommand("SELECT * FROM cart WHERE sku_id='$sku_id' and user_name='$username'");
            $skuinfo = $command->queryOne();
            //判断cookie中是否有值(you)
            if(!empty($_COOKIE['cartinfo'])){
                $info=unserialize($_COOKIE['cartinfo']);
                //print_r($info);
                //判断购物车是否有此商品
                if(!empty($skuinfo)){
                    echo "exist";
                }
                else{
                    //$cart_size=$info['cart_size'];
                    $cart_size=$info['cart_size'];
                    $cart_color=$info['cart_color'];
                    $cart_num=$info['cart_num'];
                    $cart_price=$info['cart_price'];
                    $cart_total=intval($cart_price)*intval($cart_num);
                    $add_time=time();
                    $ins_sql = $connection->createCommand()->insert('cart', [
                                    'cart_size' => $cart_size,
                                    'cart_color' => $cart_color,
                                    'cart_goodsprice' => $cart_price,
                                    'cart_num' => $cart_num,
                                    'cart_total' => $cart_total,
                                    'add_time' => $add_time,
                                    'user_name' => $username,
                                    'sku_id' => $sku_id,
                                ])->execute();
                    if($ins_sql){
                        echo '1';
                        setcookie('cartinfo','',time()-1);
                    }
                    else{
                        echo '0';
                    }                   
                }
            }
            //cookie无值
            else{
                if(!empty($skuinfo)){
                    echo "exist";
                }
                else{
                    $cart_size=$_GET['cart_size'];
                    $cart_color=$_GET['cart_color'];
                    $cart_num=$_GET['cart_num'];
                    $cart_price=$_GET['cart_price'];
                    $cart_total=intval($cart_price)*intval($cart_num);
                    $add_time=time();
                    $ins_sql = $connection->createCommand()->insert('cart', [
                                        'cart_size' => $cart_size,
                                        'cart_color' => $cart_color,
                                        'cart_goodsprice' => $cart_price,
                                        'cart_num' => $cart_num,
                                        'cart_total' => $cart_total,
                                        'add_time' => $add_time,
                                        'user_name' => $username,
                                        'sku_id' => $sku_id,
                                ])->execute();
                    if($ins_sql){
                        echo '1';
                        setcookie('cartinfo','',time()-1);
                    }
                    else{
                        echo '0';
                    }
                }
            }//无值结束                                   
        }//用户村子结束

    }
    /**
     * 立即购买
     */
    public function actionNowbuy(){
    }


}
