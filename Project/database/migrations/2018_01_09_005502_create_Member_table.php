<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Member', function (Blueprint $table) {
             //编号
           $table->increments('id');
           //用户名
           $table->string("username",20)->notNull();
           //密码
           $table->string("password") -> notNull();
           //性别 1男 2女 3保密
           $table->enum("gender",[1,2,3])->notNull()->default('1');
           //手机号
           $table->string("mobile",11);
           //角色 id 
           $table->tinyInteger("role_id");
           //状态 1禁用  2启用
           $table->enum("status",[1,2]) -> notNull()->default('2');
           //记住token
           $table-> rememberToken();
           //创建时间和更新时间
           $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Member');
    }
}
