<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\Paginator;
use DB;
class UserController extends BaseController
{
    public function index(){
        $data['user_arr'] = DB::select("select * from user");
        //print_r($user_arr);die;
        return view('xinchao/usermanager',$data);
    }
    public function upscore(){
        $user_id = $_GET['user_id'];
        $score = $_GET['score'];
        DB::update("update `user` set user_score = '$score' where user_id = '$user_id'");
    }
}
