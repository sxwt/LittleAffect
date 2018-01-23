<?php

//  定义后台某块的路由


//引入其它模块的路由 begin
require("comment.php");

//引入其他模块的路由 end

//定义admin路由
Route::group(["prefix"=>"admin"],function(){
    
     //配置后台的登录
     Route::match(["post","get"],"public/login","Admin\PublicController@login");

     //配置后台的首页
     Route::get("public/index","Admin\PublicController@index");
     Route::get("public/welcome","Admin\PublicController@welcome");

     //退出
     Route::get("public/logout","Admin\PublicController@logout");

});



?>