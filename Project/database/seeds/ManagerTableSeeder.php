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
        $facker = \Facker\Factory::create();

        $data = [];

        for($i = 0;$i<100;$i++){
            $data[] = [
                "username" => $facker -> userName,
                "password" => bcrypt("12345"),
                "gender"   => rand(1,3),
            ];
        }
    }
}
