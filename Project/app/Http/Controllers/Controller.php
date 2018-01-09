<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //ajax 请求 成功或者失败的返回json数据模板
    public function getJosnResponse($code,$message,$extra=[]){
        //响应
        return Response() -> json(["code"=>$code,"message"=>$message,"extra"=>$extra]);
    }
}
