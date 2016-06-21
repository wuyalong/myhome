<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/6/14
 * Time: 16:17
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class FenController extends BaseController
{

    public function getIndex()
    {
        $count = DB::table('sort')->count();
//        echo $count;die;
        $page_size=3;
        $page_num=ceil($count/$page_size);
        $page=@$_GET['page']?$_GET['page']:1;
        $page_limit = ($page-1) * $page_size;
        $arr = DB::table('sort')->skip($page_limit)->take($page_size)->get();
//        print_r($arr);die;
        $data['arr'] = $arr;
        $data['count'] = $count;
        $data['page_num'] = $page_num;
        $data['page'] = $page;
        return view('xinchao/product_category',['data' =>$data]);
    }
}