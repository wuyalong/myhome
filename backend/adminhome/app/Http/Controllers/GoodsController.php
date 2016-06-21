<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\Paginator;
use DB;
use yii\caching\ArrayCache;

class GoodsController extends BaseController
{
    public function types(){
        $content = DB::table('sort')->get();
        return $content;
    }
    public function index(){
         //echo $_SERVER['SCRIPT_NAME'];die;
        //echo time();die;
        //echo "qweqwe";die;
        $count = DB::table('goods')->count();
        //print_r($goods);die;
        $page_size = 10;
        $page_num = ceil($count/$page_size);
        //echo $page_num;die;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $page_limit = ($page-1) * $page_size;
        $arr = DB::table('goods')->join('sort', 'sort.sort_id', '=', 'goods.sort_id')->skip($page_limit)->take($page_size)->get();
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
        return view('xinchao/product',$data);
    }
    //商品删除
    public function goodsdel(){
        $goods_id = isset($_GET['goods_id']) ? $_GET['goods_id'] : '';
        DB::table('goods')->where('goods_id', '=', $goods_id)->delete();
        return $this->index();
    }
    //添加商品
    public function addproduct(){
        $data['types'] = $this->types();
        return view('xinchao/addproduct',$data);
    }
    /*
     * 添加商品入库
     */
    public function addproductok(){
        $goods_name = Input::get('goods_name');
        $sort_id = Input::get('sort_id');
        $goods_num = Input::get('goods_num');
        $goods_hot = Input::get('goods_hot');
        $goods_new = Input::get('goods_new');
        $goods_good = Input::get('goods_good');
        $goods_price = Input::get('goods_price');
        $add_time = Input::get('add_time');
        $goods_desc = Input::get('goods_desc');
        $file = Input::file('goods_img');
		//print_r($file);die;
        //print_r($file);
        if($file -> isValid()){
            //检验一下上传的文件是否有效.
            $clientName = $file -> getClientOriginalName();
            $tmpName = $file ->getFileName(); // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.
            $realPath = $file -> getRealPath();    //这个表示的是缓存在tmp文件夹下的文件的绝对路径
            //echo $tmpName;die;
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            $mimeTye   = $file -> getMimeType();
            //echo $mimeTye;die;
            $newName = "img".rand(111,999).'.'.$entension;
            //echo $newName;die;
			$p_path = str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../'));
            $path = $file -> move("../../../frontend/web/public/images/",$newName);
            $goods_img = $newName;
            $add=DB::table('goods')->insert(
            array('goods_name' => $goods_name, 'goods_img' => $goods_img,'goods_num'=>$goods_num,'goods_hot'=>$goods_hot,'goods_new'=>$goods_new,'goods_good'=>$goods_good,'goods_price'=>$goods_price,'sort_id'=>$sort_id,'add_time'=>$add_time,'goods_desc'=>$goods_desc));
            return redirect()->action('GoodsController@index');
        }
    }
    /*
     * 为商品添加sku信息添加页面展示
     */
    public function gaddsku(){
        $data['goods_id'] = isset($_GET['goods_id']) ? $_GET['goods_id'] : '';
        return view('xinchao/addsku', $data);
    }
    /*
     * 添加sku信息成功入库
     */
    public function gaddskuok(){
        //echo "123";
        $sku_color = Input::get('sku_color');
        $sku_size = Input::get('sku_size');
        $sku_price = Input::get('sku_price');
        $sku_marketprice = Input::get('sku_marketprice');
        $sku_num = Input::get('sku_num');
        $goods_id = Input::get('goods_id');
        $file = Input::file('sku_img');

        //print_r($file);die;
        //print_r($file);
        if($file -> isValid()){
            //检验一下上传的文件是否有效.
            $clientName = $file -> getClientOriginalName();
            $tmpName = $file ->getFileName(); // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.
            $realPath = $file -> getRealPath();    //这个表示的是缓存在tmp文件夹下的文件的绝对路径
            //echo $tmpName;die;
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            $mimeTye   = $file -> getMimeType();
            //echo $mimeTye;die;
            $newName = "img".rand(111,999).'.'.$entension;
            //echo $newName;die;
            $p_path = str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../'));
            $path = $file -> move("../../../frontend/web/public/images/",$newName);
            $sku_img = $newName;
            $add=DB::table('sku')->insert(
                array('sku_color' => $sku_color, 'sku_size' => $sku_size,'sku_price'=>$sku_price,'sku_marketprice'=>$sku_marketprice,'sku_num'=>$sku_num,'sku_img'=>$sku_img,'goods_id'=>$goods_id));
            return redirect()->action('GoodsController@gaddsku');
        }
    }
    /*
     * 分类管理
     */
    public function type(){
        $type = DB::table('type')->get();
        //print_r($type);die;
        $i=0;
        foreach($type as $value){
            $tmp[$i] = (array)$value;
            $i++;
        }
        //print_r($tmp);die;
        $data['arr'] = $this->tree($tmp,0,0);
        //$data['arr'] = $this->tree($tmp);
        //print_r($data['arr']);die;
        return view('xinchao/product_category', $data);
    }
    //添加分类
    public function addtype(){
        $type = DB::table('type')->get();
        //print_r($type);die;
        $i=0;
        foreach($type as $value){
            $tmp[$i] = (array)$value;
            $i++;
        }
        //print_r($tmp);die;
        $data['arr'] = $this->tree($tmp,0,0);
        //$data['arr'] = $this->tree($tmp);
        //print_r($data['arr']);die;
        return view('xinchao/add_product_category', $data);
    }
    public function addtypeok(){
        $t_name = Input::get('t_name');
        $p_id = Input::get('t_id');
        DB::insert("insert into type (t_name, p_id) values ('$t_name', '$p_id')");
        return $this->type();
    }
    /*
     * 递归生成树
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
//    function tree($items){
//        foreach($items as $item)
//            $items[$item['p_id']]['son'][$item['t_id']] = &$items[$item['t_id']];
//        return isset($items[0]['son']) ? $items[0]['son'] : array();
//    }
}
