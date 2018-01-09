<?php

//  定义后台某块的路由


//引入其它模块的路由 begin

//引入其他模块的路由 end

//定义admin路由
Route::group(["prefix"=>"admin"],function(){
    
     //配置后台的登录
     Route::get("index/login","Admin\IndexController@login");

     //配置后台的首页
     Route::get("index/index","Admin\IndexController@index");
});



?>