<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
//use Session;

class LoginController extends BaseController
{
    public function getIndex(){
        //echo "qweqwe";die;
        return view('xinchao/login');
    }
    public function index(){
        //echo "qweqwe";die;
        return view('xinchao/login');
    }
    public function deng()
    {
//        echo 11111;die;
            $admin_name=isset($_POST['admin_name'])?$_POST['admin_name']:'';
            $admin_password=isset($_POST['admin_password'])?$_POST['admin_password']:'';
            $results=  DB::table('admin')
                ->where('admin_name', '=',$admin_name)
                ->where('admin_pwd', '=',$admin_password)
                ->get();
            //print_r($results);die;
            session_start();
            $session = isset($_SESSION['name']) ? $_SESSION['name'] : '';
            if(empty($results) && empty($session)){
                echo "<script>alert('请输入正确的用户名或密码');</script>";
                return view('xinchao/login');
            }else{
                $_SESSION['name']=$results[0]->admin_name;
                $name=$_SESSION['name'];
                return view('xinchao/index');
            }

        }


    public function getLogout(){
        //echo "123";die;
        session_start();
        unset($_SESSION['name']);
        return redirect()->action('IndexController@index');
    }
}
