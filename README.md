## 点文

### 项目简介
-  laravel 5.5版本
-  php > 7.0
-  mysql 非严格模式 默认引擎：innodb
-  默认缓存 Radis 

### 项目初始化  
-  1.创建数据库 CREATE DATABASE `littleaffect` DEFAULT CHARACTER SET utf8;
-  2.生成迁移文件日志：php arisan migrate:install  第一次生成使用
-  3.执行迁移文件:php artisan migrate  生成数据表
-  4.执行填充器文件：php artisan db:seed --class=填充器文件名

### 其他命令
-  1.创建迁移文件：php artisan make:migration 迁移文件名称
-  2.创建填充器文件：php artisan make:seeder  填充器名称
-  3.创建控制器：php artisan make:controller  控制器名称(Admin/IndexController)
-  4.创建模型：php artisan make:model model名称(Admin/User)
-  5.创建中间件：php artisan make:middleware 中间件名称
 

### 后端使用h-ui模板开发

- [这里是layer的api](http://layer.layui.com/) ：提示弹出层用这个.
- [这里是h-ui脚本](http://www.h-ui.net/lib/jQuery.form.js.shtml)：后端模块利用该脚本发送ajax请求.
- [这里是lazyload的用法](http://www.jq22.com/jquery-info390)：懒加载图片的插件，不在显示区域内的图片不显示.
- [前端的表单验证插件](http://www.runoob.com/jquery/jquery-plugin-validate.html)：验证表单提交，前端验证.


### 规范
- 0.必须有详细的注释，方法注释，方法内部功能具体注释.
- 1.只允许修改自己的路由文件，例如：routes/routes/admin/文件夹下每个人有一个路由文件，只允许修改自己的路由文件.
- 2.建议简单功能需要联表的，能使用关联模型的则使用关联模型，关联模型实现了懒加载，可以在一定程度上减少不必要的查询，且开发方便.
- 3.获取请求参数的时候，能使用Request的则使用request的 例如：不用Input::method(),而使用$request->method(); 注意：添加Request $request 形参.