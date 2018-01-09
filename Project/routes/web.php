<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/**
 *  路由文件分离到routes 文件夹下的 admin和home 两个文件夹中
 *  团队开发方便维护,避免多人编辑一个文件
 */

//引入后台模块的路由文件
require_once("routes/admin/admin.php");


//引入前台模块的路由文件
require_once("routes/home/home.php");

//配置默认路由进首页  auth认证不过会回到登录页
Route::get('/',"Admin\PublicController@login");