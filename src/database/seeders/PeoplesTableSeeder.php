<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'people' => '1人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '2人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '3人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '4人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '5人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '6人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '7人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '8人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '9人'
        ];
        DB::table('peoples')->insert($param);
        $param = [
            'people' => '10人'
        ];
        DB::table('peoples')->insert($param);
    }
}
