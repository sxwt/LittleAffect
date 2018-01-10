## 点文

    团队使用git进行开发，登录自己的githup账号之后，点击右上角的fork按钮，将项目fork 到自己的账下

注意：第一次使用需要初始化git的信息配置

### git学习地址
[git学习地址](https://www.liaoxuefeng.com/wiki/0013739516305929606dd18361248578c67b8067c8c017b000)：了解即可.

- 1.电脑上新建一个工作目录(自己取名),进入目录右击 git bash here .
- 2.进入自己的账号，找到刚才fork的仓库（注意是自己账号的仓库）.
- 3.点击clone or download 按钮（如果显示 use ssh 则点一下），拷贝地址.
- 4.git bash here 中输入的 git clone 拷贝的地址 .
- 5.略


### 项目简介
-  laravel 5.5版本.
-  php > 7.0.
-  mysql 非严格模式 默认引擎：innodb.
-  默认缓存 Radis .
-  文件存储 七牛存储.

### 项目初始化  
-  1.创建数据库 CREATE DATABASE `littleaffect` DEFAULT CHARACTER SET utf8;.
-  2.生成迁移文件日志：php artisan migrate:install  第一次生成使用.
-  3.执行迁移文件:php artisan migrate  生成数据表.
-  4.执行填充器文件：php artisan db:seed --class=填充器文件名.

### 其他命令
-  1.创建迁移文件：php artisan make:migration 迁移文件名称.
-  2.创建填充器文件：php artisan make:seeder  填充器名称.
-  3.创建控制器：php artisan make:controller  控制器名称(Admin/IndexController).
-  4.创建模型：php artisan make:model model名称(Admin/User).
-  5.创建中间件：php artisan make:middleware 中间件名称.


### 后端使用h-ui模板开发

- [这里是layer的api](http://layer.layui.com/) ：提示弹出层用这个.
- [这里是h-ui脚本](http://www.h-ui.net/lib/jQuery.form.js.shtml)：后端模块利用该脚本发送ajax请求.
- [这里是lazyload的用法](http://www.jq22.com/jquery-info390)：懒加载图片的插件，不在显示区域内的图片不显示.
- [前端的表单验证插件](http://www.runoob.com/jquery/jquery-plugin-validate.html)：验证表单提交，前端验证.

### 前台模块
- 前台页面要求自己设计，页面可以仿照[简书](https://www.jianshu.com/)页面.
- 项目数据表参考可参考 项目 文件夹下的 项目数据库设计.xmind 文件.
- 项目模块功能可参考 项目 文件夹下的 项目功能.xmind 文件.
- 仓库管理 git命令文件 项目 文件夹下的 git.txt文件.


### 规范
- 0.必须有详细的注释，方法注释，方法内部功能具体注释.
- 1.只允许修改自己的路由文件，例如：routes/routes/admin/文件夹下每个人有一个路由文件，只允许修改自己的路由文件.
- 2.建议简单功能需要联表的，能使用关联模型的则使用关联模型，关联模型实现了懒加载，可以在一定程度上减少不必要的查询，且开发方便.
- 3.获取请求参数的时候，能使用Request的则使用request的 例如：不用Input::method(),而使用$request->method(); 注意：添加Request $request 形参.

#### 技术交流

```javascript
//javascript
$(function(){
   var message =  "微信号：zhujianwei9823";
   alert(message);
});


``` 

<?php
   $meesage 
   echo "";
?>
```
