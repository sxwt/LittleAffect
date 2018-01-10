<?php

use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create("zh_CN");

        $data = [];

        for($i = 0;$i<100;$i++){
            $data[] = [
                "username" => $faker -> userName,
                "password" => bcrypt("12345"),
                "gender"   => rand(1,3),
                "mobile"   => $faker -> phoneNumber,
                "role_id"  => rand(1,5),
                "status"   => rand(1,2),
                "created_at" => date("Y-m-d H:i:s",time())
            ];
        }
        //添加数据
        DB::table("manager")->insert($data);
    }
}
