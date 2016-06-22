<?php

namespace frontend\controllers;
use yii;
class OrdersController extends \yii\web\Controller
{
	public $layout='main';
    public function actionIndex()
    {
    	$request = Yii::$app->request;
        $cart_id = $request->get('cart_id');
        echo 1;
    }
    /**
     * 订单列表展示
     * @return [type] [description]
     */
    public function actionSelorder()
    {
    	$request = Yii::$app->request;
        //$cart_id = $request->get('cart_id');
        $sku_id = $request->get('sku_id');
        $checkout = $request->get('checkout');
        $session = Yii::$app->session;
        $connection = Yii::$app->db;
        //session值有待慧娜记录
        $username = $session->get('name');
        $user_id = $session->get('id');
        if($username==''){
        	$this->redirect('index.php?r=login/index');
        }
        else{
	        $where = '';
	        if($checkout=='myorder'){
	        	$where.='1';
	        	//订单总金额
	        	$total =$connection->createCommand("select sum(cart_total) as total from cart where user_name='$username'")->queryOne();
	        }
	         if($checkout=='checkout'){
	         	//$where.="cart.cart_id in ($cart_id)";
	        	$where.="cart.sku_id in ($sku_id)";
	        	//订单总金额
	        	$total =$connection->createCommand("select sum(cart_total) as total from cart where $where and user_name='$username'")->queryOne();
	        }
	    }
		//三表联查展示订单列表
		$order =$connection->createCommand("SELECT cart.cart_id,cart.sku_id,sku.sku_img,cart.cart_size,cart.cart_color,goods.goods_name,cart.cart_total,cart.cart_goodsprice,cart.cart_num FROM cart inner join sku on sku.sku_id=cart.sku_id inner join goods on goods.goods_id=sku.goods_id where $where and user_name='$username'");
        $orderinfo = $order->queryAll();
        //print_r($total);die;
        //查询收货人信息
        $address =$connection->createCommand("select * from address left join `user` on user.user_id=address.user_id where address.user_id='$user_id' group by address.address_place")->queryAll();
        
        return $this->render('Orders',['orderinfo'=>$orderinfo,'address'=>$address,'ordertotal'=>$total]);
    }
    /**
     *提交订单
     */
    public function actionSuborder(){
    	$money = array();
    	$s_id = array();
    	$c_id = array();
    	$counts = array();
    	$total_money=0;
    	$request = Yii::$app->request;
    	$session = Yii::$app->session;
    	$user_id = $session->get('id');
        $c_ids = $request->get('c_ids');
        $s_ids = $request->get('s_ids');
        $nums = $request->get('nums');
        $totals = $request->get('totals');
        $money=explode(',', $totals);
        $s_id=explode(',', $s_ids);
        $c_id=explode(',', $c_ids);
        $counts=explode(',', $nums);
        //print_r($money);die;
        for($i=0;$i<count($money);$i++){
        	$total_money+=intval($money[$i]);
        }
        //echo $total_money;
        //添加订单数据到订单表
        $connection = Yii::$app->db;
        for($j=0;$j<count($money);$j++){
        	$ins_sql=$connection->createCommand()->insert('order', [
			    'order_num' => time().rand(1000,9999),
			    'sku_id' => $s_id[$j],
			    'sku_addtime' => date('Y-m-d H:i:s',time()),
			    'user_id' => $user_id,
			    'order_state' => '天天快递',
			    'order_ways' => '支付宝',
			    'order_payname' => '支付宝',
				'order_numbers' => $counts[$j],			    
			    'order_total' => $money[$j],
			    'order_money' => $money[$j],
			    'order_status' => 1,
			])->execute();


			//修改单品表的库存
	        $up_sku=$connection->createCommand("update sku set sku_num=sku_num-$counts[$j] where sku_id=$s_id[$j]")->execute();
			//修改购物车表的库存
	 		$up_cart=$connection->createCommand("update cart set cart_num=cart_num-$counts[$j],cart_total=cart_goodsprice*cart_num where cart_id=$c_id[$j]")->execute();
        }        
        if($ins_sql&&$up_sku&&$up_cart){
        	echo 1;
        }
        else{
        	echo 0;
        }       
    }
    /**
     * 支付页面
     * @return [type] [description]
     */
    function actionOrderpay(){
    	$alipay_config['partner']  = '2088002075883504';
		//收款支付宝账号
		$alipay_config['seller_email']	= 'li1209@126.com';
		//安全检验码，以数字和字母组成的32位字符
		$alipay_config['key']  = 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj';
		//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
		//签名方式 不需修改
		$alipay_config['sign_type'] = strtoupper('MD5');
		//字符编码格式 目前支持 gbk 或 utf-8
		//$alipay_config['input_charset']= strtolower('utf-8');
		//ca证书路径地址，用于curl中ssl校验
		//请保证cacert.pem文件在当前文件夹目录中
		$alipay_config['cacert']    = getcwd().'\\cacert.pem';
		//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
		$alipay_config['transport']    = 'http';
		// ****************配置 end******************************

		// ******************请求参数拼接 start*********************************
		$parameter = array(
		    "service" => "create_direct_pay_by_user",
		    "partner" => $alipay_config['partner'], // 合作身份者id
		    "seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
		    "payment_type"	=> '1', // 支付类型
		    "notify_url"	=> "http://www.aichao.com/index.php?r=pay/notify", // 服务器异步通知页面路径
		    "return_url"	=> "http://www.aichao.com/index.php?r=pay/success", // 页面跳转同步通知页面路径
		    "out_trade_no"	=>'20131452033442232', // 商户网站订单系统中唯一订单号
		    "subject"	=> "订单1", // 订单名称
		    "total_fee"	=> 0.01, // 付款总金额
		    "body"	=> "", // 订单描述 可选
		    "show_url"	=> "", // 商品展示地址 可选
		    "anti_phishing_key"	=> "", // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
		    "exter_invoke_ip"	=> "", // 客户端的IP地址
		    "_input_charset"	=> 'utf-8', // 字符编码格式
		);
		// 去除值为空的参数
		foreach ($parameter as $k => $v) {
		    if (empty($v)) {
		        unset($parameter[$k]);
		    }
		}
		// 参数排序
		ksort($parameter);
		reset($parameter);
		// 拼接获得sign
		$str = "";
		foreach ($parameter as $k => $v) {
		    if (empty($str)) {
		        $str .= $k . "=" . $v;
		    } else {
		        $str .= "&" . $k . "=" . $v;
		    }
		}
		$parameter['sign'] = md5($str . $alipay_config['key']);
		$parameter['sign_type'] = $alipay_config['sign_type'];
		// **********************请求参数拼接 end*****************************

		// ****************************模拟请求 start*****************************
		$sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
		foreach ($parameter as $k => $v) {
		    $sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
		}
		$sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";
		// ****************************模拟请求 end**************************************
		echo $sHtml;

    }
    //我的订单
    public function actionMyorder(){
    	$session = Yii::$app->session;
        $connection = Yii::$app->db;
        //session值
        $username = $session->get('name');
        $user_id = $session->get('id');
         if($username==''){
        	$this->redirect('index.php?r=login/index');
        }
        else{
        	$cart_count =$connection->createCommand("SELECT count(*) as counts FROM `order` WHERE user_id=$user_id and order_numbers>0");
        	$counts = $cart_count->queryOne();
        	$count=$counts['counts'];
	        $page=isset($_GET['page'])?$_GET['page']:1;
	        $pages = 100;
	        $page_size = ceil($count/$pages);
	        $prev = $page<=1?1:$page-1;
	        $next = $page>=$page_size?$page:$page+1;
	        $limit = ($page-1)*$pages;
	        $str = 'index.php?r=orders/myorder';
	        $prev1 = "<a href='$str&page=$prev'>上一页</a>";
	        $next1 = "<a href='$str&page=$next'>下一页</a>";
	        $first1 = "<a href='$str&page=1'>首页</a>";
	        $last1 = "<a href='$str&page=$page_size'>尾页</a>";
	        $data['up_page'] = $prev1;
	        $data['down_page'] = $next1;
	        $data['first'] = $first1;
	        $data['last'] = $last1;
	        $data['page_num'] = $page_size;

        	$total =$connection->createCommand("select sum(cart_total) as total from cart where user_name='$username'")->queryOne();
        	//三表联查展示订单列表
			$order =$connection->createCommand("SELECT `order`.order_id,sku.sku_img,sku.sku_size,sku.sku_color,goods.goods_name,`order`.order_money,`order`.order_numbers,`order`.order_status FROM `order` inner join sku on order.sku_id=sku.sku_id 
				inner join goods on goods.goods_id=sku.goods_id where user_id=$user_id and `order`.order_numbers>0 limit $limit,$pages");
	        $orderinfo = $order->queryAll();
	        return $this->render('myorder',['orderinfo'=>$orderinfo,'ordertotal'=>$total,'data'=>$data]);
        }
    	
    }
    //单删除订单
    public function actionDelorder(){
    	$request = Yii::$app->request;
    	$order_id=$request->get('order_id');
    	$connection = Yii::$app->db;
    	$or_del=$connection->createCommand("delete from `order` where order_id=$order_id")->execute();
    	if($or_del){
    		$this->redirect('index.php?r=orders/myorder');
    	}
    	else{

    	}
    }
}
