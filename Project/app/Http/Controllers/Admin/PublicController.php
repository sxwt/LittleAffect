<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PublicController extends Controller
{
     //首页的登录功能
     public function login(Request $request){

        //判断请求方式
        if($request -> method() == "POST"){
            //验证
            $validator = Validator::make($request->all(),[
                "username" => "required|min:5|max:20",
                "password" => "required|min:6",
                "captcha" => "required|captcha"
            ]);
            //如果验证失败
            if($validator -> fails()){
                // dd($validator -> errors() -> all());
               return $this->getJosnResponse(1,"验证错误",$validator -> errors() -> all());
            }

            return $this->getJosnResponse(1,"成功");
        }else{
            //登录页面
            return view("admin.public.login");
        }
    }


    //登录后进入首页
    public function index(){
        
    }
}
