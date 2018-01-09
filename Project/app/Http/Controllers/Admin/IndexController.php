<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //首页的登录功能
    public function login(Request $request){

        //判断请求方式
        if($request -> method() == "POST"){
            
        }else{
            //登录页面
            return view("admin.index.login");
        }
    }


    //登录后进入首页
    public function index(){
        
    }
}
