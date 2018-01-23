<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use Validator;
use Admin\Manager;
use Auth;

class PublicController extends Controller
{
     //首页的登录功能
     public function login(Request $request){

        //判断请求方式
        if($request -> method() == "POST"){
            //验证
            $validator = Validator::make($request->all(),[
                "username" => "required|min:5|max:20",
                "password" => "required|min:5",
                "captcha" => "required|captcha|size:4"
            ]);
            //如果验证失败
            if($validator -> fails()){
                // dd($validator -> errors() -> all());
               return $this->getJsonResponse(1,current($validator -> errors() -> all()));
            }

            //验证登录
            $data =  $request -> only(["username","password"]);
            
            $reuslt = Auth::guard("admin") -> attempt($data,$request -> get("online"));
            if($reuslt){
              return $this->getJsonResponse(0,"成功");
            }else{
              return $this->getJsonResponse(1,"用户名或密码错误");
            }
        }else{
            //登录页面
            return view("admin.public.login");
        }
    }
    
    //退出登录
    public function logout(){
        Auth::guard("admin") -> logout();
        return redirect("/admin/public/login");
    }

    //登录后进入首页
    public function index(){
         return view("admin.index.index");
    }

    //欢迎光临
    public function welcome(){
        return view("admin.index.welcome");
    }
}
