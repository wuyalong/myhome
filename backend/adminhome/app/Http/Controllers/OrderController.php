<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\Paginator;
use DB;
class OrderController extends BaseController
{
    public function order_list(){
        $count = DB::table('order')->count();
        //print_r($goods);die;
        $page_size = 10;
        $page_num = ceil($count/$page_size);
        //echo $page_num;die;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $page_limit = ($page-1) * $page_size;
        $arr = DB::select("SELECT * FROM `order` INNER JOIN `user` on `user`.user_id = `order`.order_id INNER JOIN sku on `order`.sku_id = `sku`.sku_id
INNER JOIN address on `user`.user_id = `address`.user_id
inner join `goods` on `sku`.goods_id =  `goods`.goods_id limit $page_limit, $page_size");
        //$arr = DB::table('order')->join('sort', 'sort.sort_id', '=', 'goods.sort_id')->skip($page_limit)->take($page_size)->get();
        //print_r($arr);die;
        $up = $page==1 ? 1:$page-1;
        $down = $page==$page_num ? $page_num:$page+1;
        $last = $page_num;
        $data['count'] = $count;
        $data['page_num'] = $page_num;
        $data['page'] = $page;
        $data['arr'] = $arr;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['last'] = $last;
        $t_arr = DB::select("select * from type");
        //print_r($t_arr);die;
        $i=0;
        foreach($t_arr as $value){
            $tmp[$i] = (array)$value;
            $i++;
        }
        //print_r($tmp);die;
        $data['type'] = $this->tree($tmp,0,0);
        //print_r($data['type']);die;
        //此处编写
        return view('xinchao/orderproduct',$data);
    }
    /*
     * 订单删除
     */
    public function orderdel(){
        $order_id = isset($_GET['order_id']) ? $_GET['order_id'] : 1;
        DB::delete("delete from `order` where order_id=$order_id");
        return redirect()->action("OrderController@order_list");
    }
    /*
     * 递归
     */
    public function tree($data,$p_id,$level){
        static $arr = array();
        foreach($data as $v){
            if($v['p_id'] == $p_id){
                $v['level'] = $level;
                $arr[] = $v;
                $this->tree($data,$v['t_id'],$level+1);
            }
        }
        return $arr;
    }
    /*
     * 订单搜索
     */
    public function order_sou(){
        $goods_name = isset($_POST['goods_name']) ? $_POST['goods_name'] : '';
        if(empty($goods_name)){
            $goods_name = isset($_GET['goods_name']) ? $_GET['goods_name'] : '';
        }
        $address_name = isset($_GET['address_name']) ? $_GET['address_name'] : '';
        if(empty($address_name)){
            $address_name = isset($_GET['address_name']) ? $_GET['address_name'] : '';
        }
        $where = 1;
        if(!empty($goods_name)){
            $where.=" and `goods`.goods_name like '%$goods_name%' ";
        }
        if(!empty($address_name)){
            $where.=" and `address`.address_name like '%$address_name%'";
        }
        $c_arr = DB::select("SELECT count(*) as num FROM `order` INNER JOIN `user` on `user`.user_id = `order`.order_id INNER JOIN sku on `order`.sku_id = `sku`.sku_id
INNER JOIN address on `user`.user_id = `address`.user_id
inner join `goods` on `sku`.goods_id =  `goods`.goods_id where $where");
        //print_r($count);die;
        $count = $c_arr[0]->num;
        $page_size = 10;
        $page_num = ceil($count/$page_size);
        //echo $page_num;die;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $page_limit = ($page-1) * $page_size;
        $arr = DB::select("SELECT *  FROM `order` INNER JOIN `user` on `user`.user_id = `order`.order_id INNER JOIN sku on `order`.sku_id = `sku`.sku_id
INNER JOIN address on `user`.user_id = `address`.user_id
inner join `goods` on `sku`.goods_id =  `goods`.goods_id where $where limit $page_limit, $page_size");
        //print_r($arr);die;
        $up = $page==1 ? 1:$page-1;
        $down = $page==$page_num ? $page_num:$page+1;
        $last = $page_num;
        $data['count'] = $count;
        $data['page_num'] = $page_num;
        $data['page'] = $page;
        $data['arr'] = $arr;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['last'] = $last;
        $data['goods_name'] = $goods_name;
        $data['address_name'] = $address_name;
        return view('xinchao/ordersouproduct',$data);
    }
    /*
     * 修改订单状态
     */
    public function uporder(){
        $order_id = $_GET['order_id'];
        DB::update("update `order` set order_status='2' where order_id='$order_id'");
        echo 1;
    }
}
